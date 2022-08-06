<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Query\Builder;
use Modules\Base\Models\BaseModel;

class Module extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'permissions_id'
    ];

    /**
     * The permissions that the user has access to in the system.
     *
     * @return BelongsToMany
     */
    public function permissions()
    {
        return $this->BelongsToMany(Permission::class);
    }

    /**
     * Scope a query to only filter of slug.
     *
     * @param Builder $query
     * @param $slug
     * @return Builder
     */
    public function scopeOfSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }

    /**
     * Scope a query to only filter of permission.
     *
     * @param Builder $query
     * @param $permissionId
     * @return Builder
     */
    public function scopeOfPermission($query, $permissionId)
    {
        return $query->whereHas('permissions', function ($query) use ($permissionId) {
            $query->where('permission_id', $permissionId);
        })->orderBy('menu', 'DESC')->orderBy('order', 'ASC');
    }
}
