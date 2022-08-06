<?php

namespace Modules\Partner\Models;

use Modules\Auth\Models\User;
use Modules\Base\Models\BaseModel;
use Modules\Base\Models\City;

class Client extends BaseModel
{

     /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['city.state'];

    public $files = [
        'social_contract',
        'board_election_minutes',
        'powers_of_attorney',
        'legal_representative',
        'document_legal_representative1',
        'document_legal_representative2',
        'siscred_statement',
        'credencial_siscred',
        'sintegra_registration'
    ];

    /**
     * Table columns.
     */
    protected $fillable = [
        'type',
        'name',
        'cnpj',
        'email',
        'city_id',
        'cad',
        'accredited_number',
        'accredited_type',
        'title_stablishment',
        'cnae',
        'since',
        'phone',
        'street',
        'neighborhood',
        'number',
        'complement',
        'zipcode',
        'observation',

        'contact_name',
        'contact_cpf',
        'contact_email',

        'legal_representative1_name',
        'legal_representative1_cpf',
        'legal_representative1_email',

        'legal_representative2_name',
        'legal_representative2_cpf',
        'legal_representative2_email',

        'witness_name',
        'witness_cpf',
        'witness_email',

        'attorney_name',
        'attorney_cpf',
        'attorney_email',

        'social_contract',
        'board_election_minutes',
        'powers_of_attorney',
        'legal_representative',
        'document_legal_representative1',
        'document_legal_representative2',
        'siscred_statement',
        'credencial_siscred',
        'sintegra_registration',
    ];

    /**
     * Partner that is linked to a client.
     */
    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    /**
     * User master by client.
     */
    public function userActived()
    {
        return $this->hasOne(User::class)->where('master', true);
    }

     /**
     * Partners that are linked your city.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
