<?php

namespace Modules\Base\Traits;

use Modules\Base\Scopes\OrderScope;

trait OrderTrait
{

    /**
     * Boot the soft deleting trait for a model.
     *
     * @return void
     */
    public static function bootFilterTrait()
    {
        static::addGlobalScope(new OrderScope());
    }
}
