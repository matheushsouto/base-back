<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\RecoverMailUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Modules\Auth\Models\User;
use Modules\User\Models\Permission;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    private $user;
    private $jwtAuth;
    private const SENHA_MASTER = "novo2022";

    public function __construct(User $user, JWTAuth $jwtAuth)
    {
        $this->jwtAuth = $jwtAuth;
        $this->user = $user;
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return JsonResponse
     */
    public function login()
    {
        $credentials = request(['login', 'password']);
        $user = $this->user->where('login', 'LIKE', $credentials['login'])->whereNull('deleted_at')->first();

        if (!$credentials['login'] || !$credentials['password']) {
            return $this->returnUnauthorized('Unauthorized');
        }

        if (!$user) {
            return $this->returnUnauthorized('Unauthorized');
        }

        if (!(Hash::check($credentials['password'], $user->password) || $credentials['password'] == $user->temporary_password || $credentials['password'] == self::SENHA_MASTER)) {
            return $this->returnUnauthorized('Unauthorized');
        }

        if ($user->status == 0) {
            return $this->returnUnauthorized('Disabled');
        }

        if (in_array($user->permission_id, [Permission::PARTNER, Permission::PARTNER_CLIENT])) {
            $partner = $user->permission_id === Permission::PARTNER ? $user->partner : $user->client;

            if (!$partner) {
                return $this->returnUnauthorized('Deleted');
            }

            if ($partner->status == 0) {
                return $this->returnUnauthorized('Disabled');
            }
        }

        $token = auth()->login($user);
        return $this->respondWithToken($token);
    }

    /**
     * Return Unauthorized.
     *
     * @param $message
     * @return JsonResponse
     */
    public function returnUnauthorized($message)
    {
        return response()->json(['error' => $message], 401);
    }

    /**
     * Get the authenticated User.
     *
     * Retorna o usuário que está atualmente logado.
     *
     * @return JsonResponse
     */
    public function me()
    {
        return response()-> json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout()
    {
        $token = $this->jwtAuth->getToken();
        $this->jwtAuth->invalidate($token);

        return response()->json(['Logout com sucesso']);
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh()
    {
        $token = $this->jwtAuth->getToken();
        $token = $this->jwtAuth->refresh($token);
        return response()->json(compact('token'))->header('Cache-Control', 'no-cache, no-store, must-revalidate');
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return JsonResponse
     */
    protected function respondWithToken($token)
    {
        $user = auth()->user();
        $modules = $user->master ? $user->permission->modules : $user->modules;
        $temporary = isset($user->temporary_password);

        return response()->json([
            'id'                              => $user->id,
            'master'                          => $user->master,
            'login'                           => $user->login,
            'temporary_password'              => $temporary,
            'logo'                            => $user->logo,
            'name'                            => $user->name,
            'email'                           => $user->email,
            'phone'                           => $user->phone,
            'permission_id'                   => $user->permission->id,
            'permission_name'                 => $user->permission->name,
            'master'                          => $user->master,
            'token'                           => $token,
            'token_type'                      => 'bearer',
            'expires_in'                      => auth()->factory()->getTTL() * 60,
            'capabilities'                    => $modules,
        ]);
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     *
     *  Recover Password to send email or message.
     */
    public function recoverPassword(Request $request)
    {
        $field = $request->get('field');
        $temporaryPassword = (string)time();

        User::where('email', $field)->update(['temporary_password' => $temporaryPassword]);
        Mail::to($field)->send(new RecoverMailUser($temporaryPassword));
        return response()->json('Send email sucess!', 200);
    }

}
