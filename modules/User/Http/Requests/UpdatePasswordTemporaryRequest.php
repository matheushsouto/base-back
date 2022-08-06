<?php

namespace Modules\User\Http\Requests;

use App\Rules\Password;
use Modules\Base\Http\Requests\BaseFormRequest;

class UpdatePasswordTemporaryRequest extends BaseFormRequest
{
    /**
     * Performs specific validation rules for the requisition.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'new_password'           => 'required|min:6|max:25',
            'confirm_new_password'   => 'required|min:6|max:25|same:new_password',
        ];
    }
}
