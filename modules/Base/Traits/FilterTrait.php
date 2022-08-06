<?php

namespace Modules\Base\Traits;

use Modules\Base\Scopes\FilterScope;
use Modules\Base\Scopes\OrderScope;

trait FilterTrait
{

    /**
     * Boot the soft deleting trait for a model.
     *
     * @return void
     */
    public static function bootFilterTrait()
    {
        static::addGlobalScope(new FilterScope());
        static::addGlobalScope(new OrderScope());
    }
}
