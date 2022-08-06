<?php

namespace Modules\User\Services;

use Exception;
use Illuminate\Support\Facades\DB;
use Modules\Auth\Models\User;
use Modules\User\Models\UserHasUserCategory;
use Throwable;

class UserService
{
    public static function manageUserHasUserCategory($userId, $clientId, $categories)
    {
        $user = User::where('id', $userId)->where('client_id', $clientId)->first();
        if ($user) {
            DB::beginTransaction();
            try {
                UserHasUserCategory::where('client_id', $clientId)->where('user_id', $userId)->delete();
                foreach ($categories as $categoryId) {
                    UserHasUserCategory::create(['user_id' => $user->id, 'category_id' => $categoryId, 'client_id' => $clientId]);
                }
                DB::commit();
                return true;
            } catch(Exception $e) {
                DB::rollBack();
            } catch(Throwable $e) {
                DB::rollBack();
            }
        }
        return false;
    }
}
