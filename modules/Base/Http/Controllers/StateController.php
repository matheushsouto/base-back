<?php

namespace Modules\Base\Http\Controllers;

use Illuminate\Http\JsonResponse;
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
        $states = State::all();
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
