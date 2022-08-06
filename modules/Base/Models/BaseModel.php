<?php

namespace Modules\Base\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class BaseModel extends Model
{
    use SoftDeletes, LogsActivity;

    protected static $logFillable = true;

    protected static $logOnlyDirty = true;

    const UPDATED_AT = null;

    /** @var bool false
     * Disabled timestamps
     */
    public $timestamps = true;
     /**
     * Set column date type.
     *
     * @var protected $dates
     */
    protected $dates = ['deleted_at', 'created_at'];

    protected $hidden = ['deleted_at'];

    public $pairName = 'name';

    public $files = [];

}
