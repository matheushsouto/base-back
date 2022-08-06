<?php

namespace Modules\User\Http\Controllers;

use App\Mail\BatteryMailUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modules\Base\Http\Controllers\BaseController;
use Modules\Base\Services\ApiNodeService;
use Modules\Base\Services\FileSystemService;
use Modules\Base\Services\Utils;
use Modules\Partner\Models\Client;
use Modules\Partner\Services\ClientService;
use Modules\User\Events\BatteryEvent;
use Modules\User\Events\QrCodeEvent;
use Modules\User\Http\Requests\ModuleUserRequest;
use Modules\User\Http\Requests\UpdatePasswordRequest;
use Modules\User\Http\Requests\UpdatePasswordTemporaryRequest;
use Modules\User\Http\Requests\UpdateProfileRequest;
use Modules\User\Http\Requests\UpdateUserRequest;
use Modules\User\Http\Requests\UserRequest;
use Modules\User\Models\Module;
use Modules\User\Models\Permission;
use Modules\User\Models\User;
use Modules\User\Services\UserService;

class UserController extends BaseController
{
    const CONECTED = 'CONECTADO';
    const DISCONNECTED = 'DESCONECTADO';

    protected $filterClientId = false;

    public function __construct(User $user)
    {
        $this->model = $user;
        $this->validator = UserRequest::class;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return object
     */
    public function store(Request $request)
    {
        // $clientId = request()->user()->client_id;
        // $categories = $request->get('categories');
        // $loggedUser = request()->user();
        // $permissionId = $loggedUser->permission_id;
        // $this->add('permission_id', $permissionId);
        // $userPartner = $loggedUser->partner;
        // $userClient = $loggedUser->client;

        // $this->add('partner_id', $userPartner ? $userPartner->id : null);
        // $this->add('client_id', $userClient ? $userClient->id : null);

        // if (!$this->checkPermission($permissionId)) {
        //     return response()->json('Permission failed', 403);
        // }

        $this->returnResponse = false;
        $request['master'] = 1;
        $request['permission_id'] = 1;
        $user = parent::store($request);
        // UserService::manageUserHasUserCategory($user->id, $clientId, $categories);


        // if ($permissionId == Permission::PARTNER_CLIENT) {
        //     $modules = Module::ofPermission($permissionId)->where('menu', 'USER')->get();

        //     foreach ($modules as $module) {
        //         $newModuleUser = [
        //             'user_id'    => $user->id,
        //             'module_id'  => $module->id,
        //             'read'       => true,
        //             'write'      => true,
        //             'delete'     => true,
        //         ];

        //         $totalRowsUpdated = User::find($user->id)->modules()->updateExistingPivot($module->id, $newModuleUser);

        //         if ($totalRowsUpdated == 0) {
        //             User::find($user->id)->modules()->attach($module->id, $newModuleUser);
        //         }
        //     }
        // }

        return parent::returnItem($user);
    }
 
    public function update(Request $request, $id)
    {
        // $clientId = request()->user()->client_id;
        // $categories = $request->get('categories', []);
        // $permissionId = request()->user()->permission->id;
        // $this->validator = UpdateUserRequest::class;
        $password = $request->get('password');
        if (!$password) {
            $request->request->remove('password');
        }

        // if (!$this->checkPermission($permissionId)) {
        //     return response()->json('Permission failed', 403);
        // }

       $user = parent::update($request, $id);

        // UserService::manageUserHasUserCategory($id, $clientId, $categories);

        return parent::returnItem($user);
    }

    /**
     * Check permission from user.
     */
    public function checkPermission($permissionId)
    {
        if (!$permissionId || empty($permissionId)) {
            return false;
        }

        switch ($permissionId) {
            case Permission::WEB_MASTER:
                $this->addFilter("permission_id = $permissionId");
                break;
            case Permission::PARTNER:
                $partnerId = request()->user()->partner_id;
                $this->addFilter("partner_id = $partnerId");
                break;
            case Permission::PARTNER_CLIENT:
                $this->filterClientId = true;
                $this->addFilter("master = false");
                break;
        }

        return true;
    }

    /**
     * Display the specified resource by searching with the user's login.
     *
     * @param string $login
     *
     * @return JsonResponse
     */
    public function login($login)
    {
        $user = User::where('login', 'LIKE', $login)->first();
        return response()->json($user, 200);
    }

    /**
     * Update user password.
     *
     * @param UpdatePasswordRequest $request
     *
     * @return JsonResponse
     */
    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = request()->user();
        $user->password = $request->get('new_password');
        $user->save();
        return response()->json($user, 200);
    }

    /**
     * Update user password.
     *
     * @param UpdatePasswordRequest $request
     *
     * @return JsonResponse
     */
    public function updatePasswordTemporary(UpdatePasswordTemporaryRequest $request)
    {
        $user = request()->user();
        $user->password = $request->get('new_password');
        $user->temporary_password = null;
        $user->save();
        return response()->json($user, 200);
    }

    /**
     * Update user profile
     *
     * @param UpdateProfileRequest $request
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = request()->user();
        $image = $request->file('logo');
        $validated = $request->validated();
        if ($image) {
            if ($user->logo) {
                FileSystemService::removeFile($user->logo);
            }
            $path = FileSystemService::uploadFile($image, 'logo');
            $user->logo = $path;
        }
        if (@$validated['name']) {
            $user->name = $validated['name'];
        }

        if (@$validated['login']) {
            $user->login = $validated['login'];
        }

        if (@$validated['email']) {
            $user->email = $validated['email'];
        }

        if (@$validated['phone']) {
            $user->phone = $validated['phone'];
        }

        if (@$validated['new_password'] && @$validated['new_password'] !== 'null') {
            $user->password = $validated['new_password'];
        }

        $user->save();
        return response()->json($user, 200);
    }

    /**
     * Create or update pivot from user to module.
     *
     * @param ModuleUserRequest $request
     * @return JsonResponse
     */
    public function createOrUpdateModuleUser(ModuleUserRequest $request)
    {
        $newModuleUser = $request->validated();
        $userId = $request->get('user_id');
        $moduleId = $request->get('module_id');

        $userModule = User::find($userId)->modules();
        $totalRowsUpdated = $userModule->updateExistingPivot($moduleId, $newModuleUser);

        if ($totalRowsUpdated == 0) {
            $userModule->attach($moduleId, $newModuleUser);
        }

        return response()->json('Created or updated with success.', 200);
    }

    public function allUpdateModuleMenuUser(Request $request)
    {
        $userId = $request->get('user_id');
        $menu = $request->get('menu');
        $action = $request->get('action');
        $user = User::where('id', $userId);

        $modules = Module::ofPermission($user->first()->permission_id)->where('menu', $menu)->get();

        foreach ($modules as $module) {

            $newModuleUser = [
                'user_id' => $userId,
                'module_id' => $module->id,
                'read' => $action,
                'write' => $action,
                'delete' => $action,
            ];

            $totalRowsUpdated = User::find($userId)->modules()->updateExistingPivot($module->id, $newModuleUser);

            if ($totalRowsUpdated == 0) {
                User::find($userId)->modules()->attach($module->id, $newModuleUser);
            }
        }

        return response()->json('Created or updated with success.', 200);
    }

    public function allUpdateModuleUser(Request $request)
    {
        $userId = $request->get('user_id');
        $field = $request->get('field');
        $action = $request->get('action');
        $menu = $request->get('menu');

        $user = User::where('id', $userId);
        $modules = Module::ofPermission($user->first()->permission_id)->where('menu', $menu)->get();

        foreach ($modules as $module) {

            $newModuleUser = [
                'user_id' => $userId,
                'module_id' => $module->id,
                "$field" => $action,
            ];

            $totalRowsUpdated = User::find($userId)->modules()->updateExistingPivot($module->id, $newModuleUser);

            if ($totalRowsUpdated == 0) {
                User::find($userId)->modules()->attach($module->id, $newModuleUser);
            }
        }

        return response()->json('Created or updated with success.', 200);
    }

    /**
     * Update theme by user.
     */
    public function updateTheme(Request $request)
    {
        $userId = request()->user()->id;
        $color = $request->get('color');
        $scheme = $request->get('scheme');
        $layout = $request->get('layout');

        $user = User::find($userId);

        $user->theme_color = $color;
        $user->theme_scheme = $scheme;
        $user->theme_layout = $layout;
        $user->update();

        return response()->json('Updated with success', 200);
    }

    /**
     * Get qr-code to api NodeJs
     *
     * @return JsonResponse
     *
     */
    function getQrCode()
    {
        $clientId = request()->user()->client_id;
        return response()->json(ApiNodeService::initialize($clientId));
    }

    function logoutSession(Client $client)
    {
        event(new QrCodeEvent($client->id, 'qr-code-new', '', null));
        ClientService::onPhoneStateChange($client->id, 'Não pareado');
        return response()->json(ApiNodeService::logoutSession($client->id));
    }

    /**
     * Save status whatsapp.
     *
     * @param Request $request
     * @param Client $client
     *
     */
    function callbackQrCode(Request $request, Client $client)
    {
        $isAuthenticated = $request->get('authenticated');
        if ($isAuthenticated) {
            ClientService::onPhoneStateChange($client->id, 'Ativo');
        } else {
            ClientService::onPhoneStateChange($client->id, 'Não pareado');
        }
    }

    /**
     * Destroy Qr-code whatsapp.
     *
     * @param $clientId
     *
     */
    function destroyQrCode($clientId)
    {
        event(new QrCodeEvent($clientId, 'qr-code-destroy', '', null));
        return response()->json('Qr-code destroy sucess!', 200);
    }

    /**
     * Update qr-code to api node.
     *
     * @param Request $request
     * @param $clientId
     */
    function qrCodeRefresh(Request $request, $clientId)
    {
        $qrCode = $request->get('qrCode');
        event(new QrCodeEvent($clientId, 'qr-code-refresh', $qrCode, null));
    }

    /**
     * Verify qr-code is utilized.
     *
     * @param Request $request
     * @param $clientId
     */
    function qrCodeAlready(Request $request, $clientId)
    {
        $status = $request->get('status');
        Client::where('id', $clientId)->update(array('battery_phone' => null));
        event(new QrCodeEvent($clientId, 'qr-code', $status, true));
    }

    /**
     * Get level battery to phone in table client.
     *
     * @return JsonResponse
     */
    function getLevelBattery()
    {
        $clientId = request()->user()->client_id;
        $battery = Client::where('id', $clientId)->first();
        return response()->json($battery, 200);
    }

    /**
     * Get level battery to event node in save percentage.
     *
     * @param Request $request
     * @param $clientId
     */
    function levelBattery(Request $request, $clientId)
    {
        $battery = $request->get('battery');
        $plugged = $request->get('plugged');

        $client = Client::where('id', $clientId);

        $clientUpdated = $client->update(['battery_phone' => $battery]);
        $clientMail = $client->first();

        if ($battery == 15 && $clientMail->email && !$plugged) {
            Mail::to($clientMail->email)->send(new BatteryMailUser());
        }
        event(new BatteryEvent($battery, $clientId, $plugged));
    }

    /**
     * Delete multiple users in the database that are not master.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->get('ids');
        $date = Utils::getCurrentDate();

        foreach ($ids as $id) {
            $user = $this->model->find($id);
            if ($user->master) {
                continue;
            }
            $user->login = $user->login . $date;
            $user->update();
            $user->delete();
        }

        $index = request()->get('index', false);
        if ($index) {
            return $this->index();
        } else {
            return response()->json('Deletado com sucesso', 202);
        }
    }
}
