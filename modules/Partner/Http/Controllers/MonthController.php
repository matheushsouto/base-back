<?php

namespace Modules\Partner\Http\Controllers;

use Modules\Base\Http\Controllers\BaseController;
use Modules\Partner\Models\Month;

class MonthController extends BaseController
{
    public function __construct(Month $month)
    {
        $this->model = $month;
    }
}
