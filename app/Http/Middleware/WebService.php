<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Partner\Models\ClientConfiguration;

class WebService
{
    /**
     * Handle an incoming request and check if the user has permission.
     *
     * @param Request $request
     * @param \Closure $next
     * @param null $moduleSlug
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $authUser = $request->header('PHP_AUTH_USER', null);
        $authPass = $request->header('PHP_AUTH_PW', null);

        if(!$authUser || !$authPass){
            return response()->json(['error' => 'You don\'t have permission.'], 401);
        }

        $clientConfiguration = ClientConfiguration::where('web_service_id', $authUser)->where('web_service_hash', $authPass)->first();

        if(!$clientConfiguration){
            return response()->json(['error' => 'Wrong credentials.'], 401);
        }
        
        $myIp = $request->ip();
        if($clientConfiguration->web_service_ip != $myIp){
            return response()->json(['error' => 'Ip blocked.'], 401);
        }

        $items = request()->all();
        $items['client_id'] = $clientConfiguration->client_id;

        request()->merge($items);
        
        return $next($request);
    }
}
