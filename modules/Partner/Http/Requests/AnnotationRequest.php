<?php

namespace Modules\Partner\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class AnnotationRequest extends BaseFormRequest
{
    /**
     * Performs specific validation rules for the requisition.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'annotation'                          => 'required',
            'file'                                => 'nullable',
        ];
    }
}
