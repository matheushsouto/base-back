<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Permission
{
    /**
     * Handle an incoming request and check if the user has permission.
     *
     * @param Request $request
     * @param \Closure $next
     * @param null $moduleSlug
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $moduleSlug = null)
    {
        if (strpos($request->getRequestUri(), 'fetch-pair')) {
            return $next($request);
        }
        
        $fieldPermissionBd = 'write';
        switch ($request->method()) {
            case 'GET' :
                $fieldPermissionBd = 'read';
                break;
            case 'DELETE' :
                $fieldPermissionBd = 'delete';
        }

        if (!$moduleSlug) {
            $routeWithOutParameters = explode('?', $request->getRequestUri())[0];
            $arrayRequestUri = explode('/', $routeWithOutParameters);
            
            $moduleSlug = count($arrayRequestUri) > 3 && (!intval($arrayRequestUri[3]) && $arrayRequestUri[3] != 'bulk') ? "$arrayRequestUri[2]/$arrayRequestUri[3]" : $arrayRequestUri[2];
        }
        
        $user = $request->user();
        if ($user->master) {
            $module = $user->permission->modules()->ofSlug($moduleSlug)->first();
        } else {
            $module = $request->user()->modules()->ofSlug($moduleSlug)->where($fieldPermissionBd, true)->first();
        }
        if (!$module) {
            return response()->json(['error' => 'You don\'t have permission.'], 401);
        }
        return $next($request);
    }
}
