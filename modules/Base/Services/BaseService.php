<?php

namespace Modules\Base\Services;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Modules\Base\Scopes\FilterScope;
use Modules\Base\Scopes\OrderScope;

class BaseService {

    static $canCache = false;
    static $cacheName;
    static $model;
    static $with = [];
    static $validator;
    static $returnResponse = true;
    static $filterClientId = true;
    static $updateWithClientId = true;

    static function add($key, $value)
    {
        $items = request()->all();
        $items[$key] = $value;

        request()->merge($items);
    }

    static protected function errorResponse($message, $code = 500)
    {
        return response()->json(['errors' => $message, 'code' => $code], $code);
    }

    static protected function store($request)
    {
        $allFields = $request->all();
        if (self::$updateWithClientId) {
            $clientId = request()->get('client_id');
            self::add('client_id', $clientId);
        }

        if (self::$validator) {
            $validator = App::make(self::$validator);
            $allFields = $validator->validated();
        }

        $item = self::$model->create($allFields);
        if (self::$returnResponse) {
            return self::returnItem($item);
        } else {
            return $item;
        }
    }

    static protected function returnItem($item)
    {
        $index = request()->get('index', false);
        if ($index) {
            return self::index();
        } else {
            return response()->json($item);
        }
    }

    static protected function index()
    {
        $all = null;
        if (self::$canCache) {
            $all = Cache::get(self::$cacheName);
        }

        if (!$all) {
            $limit = request()->get('limit', 5);

            self::$model->addGlobalScope(new FilterScope());
            self::$model->addGlobalScope(new OrderScope());
            $model = self::$model;
            if (self::$filterClientId) {
                $clientId = request()->user()->client_id;
                $model = self::$model->where('client_id', $clientId);
            }
            $model = $model->with(self::$with);

            if ($limit && $limit != 'null') {
                $all = $model->paginate($limit);
            } else {
                $all = $model->get();
            }
        }

        if (self::$canCache) {
            Cache::add(self::$cacheName, $all);
        }

        if (self::$returnResponse) {
            return self::successResponse($all, 200);
        }
        return $all;
    }

    static protected function successResponse($data, $code = 200)
    {
        return response()->json($data, $code);
    }
}
