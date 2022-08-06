<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Base\Facade\ResourceRegistrar;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $registrar = new ResourceRegistrar($this->app['router']);

        $this->app->bind('Illuminate\Routing\ResourceRegistrar', function () use ($registrar) {
            return $registrar;
        });
    }
}
