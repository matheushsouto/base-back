<?php

namespace Modules\Partner\Models;

use Modules\Base\Models\BaseModel;

class Annotation extends BaseModel
{

    public $files = [
        'file',
    ];

    /**
     * Table columns.
     */
    protected $fillable = [
        'annotation',
        'file'
    ];
}
