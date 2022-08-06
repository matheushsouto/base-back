<?php

namespace Modules\Partner\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Modules\Base\Http\Controllers\BaseController;
use Modules\Base\Services\Utils;
use Modules\Partner\Http\Requests\PartnerRequest;
use Modules\Partner\Models\BankSlip;
use Modules\Partner\Models\BankSlipType;
use Modules\Partner\Models\FeePartner;
use Modules\Partner\Models\Partner;
use Modules\User\Models\User;

class PartnerController extends BaseController
{
    protected $filterClientId = false;

    public function __construct(Partner $partner)
    {
        $this->model = $partner;
        $this->validator = PartnerRequest::class;
    }
}
