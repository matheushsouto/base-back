<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Modules\Base\Models\BaseModel;
use Modules\Partner\Models\Client;
use Modules\Partner\Models\Partner;

class User extends BaseModel
{
    use Notifiable;

    const MODULE_CHAT_MASTER = 32;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'logo',
        'login',
        'password',
        'email',
        'phone',
        'master',
        'status',
        'permission_id',
        'partner_id',
        'client_id', 
        'theme_color',
        'theme_scheme',
        'theme_layout'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'permission_id',
        'deleted_at'
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
     * @return BelongsTo
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
