<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Modules\User\Models\Module;
use Modules\User\Models\User;

class ModuleController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @param User $user
     *
     * @return JsonResponse
     */
    public function getModulesByUser(User $user)
    {
        $modules = $user->modules;
        return $this->successResponse($modules, 200);
    }

    /**
     * Display a listing of the resource.
     *
     *
     * @return JsonResponse
     */
    public function getModulesByPermission()
    {
        $permissionId = request()->user()->permission_id;
        $modules = Module::ofPermission($permissionId)->get();

        return $this->successResponse($modules, 200);
    }
}
