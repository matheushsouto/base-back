<?php

namespace Modules\Partner\Http\Controllers;

use Modules\Base\Http\Controllers\BaseController;
use Modules\Partner\Models\Year;

class YearController extends BaseController
{
    public function __construct(Year $year)
    {
        $this->model = $year;
    }
}
