<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    const WEB_MASTER = 1;
    const PARTNER = 2;
    const PARTNER_CLIENT = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The modules that the user has access to in the system.
     *
     * @return BelongsToMany
     */
    public function modules()
    {
        return $this->belongsToMany(Module::class)->withPivot('read', 'write', 'delete')->as('capability');
    }
}
