<?php

namespace Modules\Partner\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class RegisterServiceProvider
 *
 * A clase estende ServiceProvider
 * @package ServiceProvider
 *
 */
class PartnerServiceProvider extends ServiceProvider{

    protected $namespace = 'Modules\Partner\Http\Controllers';

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
        Route::prefix('v1/')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(__DIR__.'/../Routes/route.php');

    }

}
