<?php

namespace Modules\Partner\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class PartnerRequest extends BaseFormRequest
{
    /**
     * Performs specific validation rules for the requisition.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                            => 'required|max:255',
            'cnpj'                            => 'nullable|cnpj',
            'cpf'                             => 'nullable|cpf',
            'email'                           => 'nullable|email',
            'status'                          => 'required|int',
            'phone'                           => 'nullable',
            'pix'                             => 'nullable',
            'agency'                          => 'nullable',
            'account'                         => 'nullable',
            'bank'                            => 'nullable',
            'city_id'                         => 'nullable|exists:cities,id',
        ];
    }
}
