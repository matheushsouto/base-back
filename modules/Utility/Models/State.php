<?php

namespace Modules\Utility\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Table columns.
     */
    protected $fillable = [
        'name',
        'code'
    ];

    /**
     * State that are linked yours cities.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
