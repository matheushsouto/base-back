<?php

namespace Modules\Partner\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class ClientRequest extends BaseFormRequest
{
    /**
     * Performs specific validation rules for the requisition.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                                 => 'required|max:255',
            'cnpj'                                 => 'required|cnpj',
            'email'                                => 'required|email',
            'status'                               => 'nullable|int',
            'city_id'                              => 'nullable|int',
            'type'                                 => 'nullable',
            'accredited_number'                    => 'nullable',
            'accredited_type'                      => 'nullable',
            'title_stablishment'                   => 'nullable',
            'cnae'                                 => 'nullable',
            'cad'                                  => 'nullable',
            'since'                                => 'nullable',
            'phone'                                => 'nullable',
            'street'                               => 'nullable',
            'neighborhood'                         => 'nullable',
            'number'                               => 'nullable',
            'complement'                           => 'nullable',
            'zipcode'                              => 'nullable',
            'observation'                          => 'nullable',
            'contact_name'                         => 'nullable',
            'contact_cpf'                          => 'nullable',
            'contact_email'                        => 'nullable',
            'legal_representative1_name'           => 'nullable',
            'legal_representative1_cpf'            => 'nullable',
            'legal_representative1_email'          => 'nullable',
            'legal_representative2_name'           => 'nullable',
            'legal_representative2_cpf'            => 'nullable',
            'legal_representative2_email'          => 'nullable',
            'witness_name'                         => 'nullable',
            'witness_cpf'                          => 'nullable',
            'witness_email'                        => 'nullable',
            'attorney_name'                        => 'nullable',
            'attorney_cpf'                         => 'nullable',
            'attorney_email'                       => 'nullable',
            'social_contract'                      => 'nullable',
            'board_election_minutes'               => 'nullable',
            'powers_of_attorney'                   => 'nullable',
            'legal_representative'                 => 'nullable',
            'document_legal_representative1'       => 'nullable',
            'document_legal_representative2'       => 'nullable',
            'siscred_statement'                    => 'nullable',
            'credencial_siscred'                   => 'nullable',
            'sintegra_registration'                => 'nullable',
        ];
    }
}
