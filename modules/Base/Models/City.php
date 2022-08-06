<?php

namespace Modules\Base\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * Table columns.
     */
    protected $fillable = [
        'city',
        'state_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'state_id',
    ];

    /**
     * City that are linked your state.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
