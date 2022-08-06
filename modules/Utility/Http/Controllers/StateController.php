<?php

namespace Modules\Utility\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Modules\Base\Http\Controllers\BaseController;
use Modules\Base\Models\State;

class StateController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $states = Cache::get("states");
        if (!$states){
            $states = State::all();
            Cache::add("states", $states);
        }

        return $this->successResponse($states, 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @param State $state
     *
     * @return JsonResponse
     */
    public function getCitiesByState(State $state)
    {
        $cities = $state->cities;
        return $this->successResponse($cities, 200);
    }
}
