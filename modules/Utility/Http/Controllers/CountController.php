<?php

namespace Modules\Utility\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Modules\Base\Http\Controllers\BaseController;
use Modules\Base\Scopes\FilterScope;

class CountController extends BaseController
{
    /**
     * Checks if it contains any records in the database.
     *
     * @param $table
     *
     * @return bool
     */
    function count($module, $table)
    {
        try {
            $module = ucwords($module);
            $table = ucwords($table);
            $model = app("Modules\\$module\\Models\\$table");
            $model->addGlobalScope(new FilterScope());
            return $model->count();
        } catch (\Throwable $th) {
            return $this->errorResponse('An error occurred');
        }
    }
}
