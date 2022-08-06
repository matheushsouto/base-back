<?php

namespace Modules\Utility\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UtilityServiceProvider extends ServiceProvider{

    protected $namespace = 'Modules\Utility\Http\Controllers';

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
        Route::prefix('v1/utility/')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(__DIR__.'/../Routes/route.php');

    }
}
