<?php

namespace Modules\Partner\Models;

use Modules\Base\Models\BaseModel;
use Modules\Base\Models\City;

class Partner extends BaseModel
{
    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['city.state'];

    /**
     * Table columns.
     */
    protected $fillable = [
        'name',
        'cnpj',
        'cpf',
        'email',
        'status',
        'phone',
        'city_id',
        'pix',
        'agency',
        'account',
        'bank',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'city_id',
        'deleted_at'
    ];


    /**
     * Partners that are linked your city.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
