<?php

namespace Modules\Partner\Models;

use Illuminate\Database\Eloquent\Model;

class Changelog extends Model
{
    /**
     * Table columns.
     */
    protected $fillable = [
        'title',
        'description',
        'send_mobile'
    ];
}
