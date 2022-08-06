<?php

namespace Modules\Auth\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Modules\Partner\Models\Client;
use Modules\Partner\Models\Partner;
use Modules\User\Models\Module;
use Modules\User\Models\Permission;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login',
        'password',
        'status',
        'permission_id',
        'master',
        'client_id',
        'partner_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Set the user's password.
     *
     * @param string $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * Get JWT identifier.
     *
     * @return array
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get JWT custom claims.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * The modules that the user has access to in the system.
     *
     * @return BelongsToMany
     */
    public function modules()
    {
        return $this->belongsToMany(Module::class)->withPivot('read', 'write', 'delete')->as('capability');
    }


    /**
     * User permission on the system.
     *
     * @return BelongsTo
     */
    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }

    /**
     * Get client on the system.
     *
     * @return  BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }


    /**
     * Get partner on the system.
     *
     * @return BelongsTo
     */
    public function Partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
