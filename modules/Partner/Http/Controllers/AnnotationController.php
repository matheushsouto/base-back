<?php

namespace Modules\Partner\Http\Controllers;

use Modules\Base\Http\Controllers\BaseController;
use Modules\Partner\Http\Requests\AnnotationRequest;
use Modules\Partner\Models\Annotation;

class AnnotationController extends BaseController
{
    protected $filterClientId = false;

    /**
     * ClientController constructor.
     *
     * @param $client
     */
    public function __construct(Annotation $annotation)
    {
        $this->model     = $annotation;
        $this->validator = AnnotationRequest::class;
    }
}
