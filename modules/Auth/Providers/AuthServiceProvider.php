<?php

namespace Modules\Auth\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class RegisterServiceProvider
 *
 * A clase estende ServiceProvider
 * @package ServiceProvider
 *
 */
class AuthServiceProvider extends ServiceProvider{

    protected $namespace = 'Modules\Auth\Http\Controllers';

     /**
     * Initialize function to system.
     *
     */
    public function boot()
    {
        $this->mapRoutes();
    }

     /**
     * Create group route protected.
     *
     * @internal Set prefix on the route.
     *
     */
    public function mapRoutes()
    {
        Route::prefix('v1/auth/')
             ->namespace($this->namespace)
             ->group(__DIR__.'/../Routes/route.php');
    }

}
