<?php

namespace Modules\Partner\Models;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    public $pairName = 'name';
    /**
     * Table columns.
     */
    protected $fillable = [
        'name',
    ];
}
