<?php

namespace Modules\User\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class UpdateProfileRequest extends BaseFormRequest
{
    /**
     * Performs specific validation rules for the requisition.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                => 'nullable',
            'logo'                => 'nullable',
            'email'               => 'nullable',
            'phone'               => 'nullable',
            'login'               => 'nullable',
            'new_password'        => 'nullable',
        ];
    }
}
