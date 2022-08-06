<?php

namespace Modules\User\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class UpdateUserRequest extends BaseFormRequest
{
    /**
     * Performs specific validation rules for the requisition.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'name'              => 'required|max:255',
            'login'             => 'required|max:120',
            'email'             => 'nullable|max:120',
            'password'          => 'nullable',
            'status'            => 'nullable|int',
            'partner_id'        => 'nullable|int|exists:partners,id',
            'client_id'         => 'nullable|int|exists:clients,id',
            'category_id'       => 'nullable|int|exists:user_categories,id',
            'shortcut'          => 'nullable'
        ];
    }

}
