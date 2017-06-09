<?php
namespace Hkonnet\LaravelShipStation;

use Illuminate\Support\ServiceProvider;

class LaravelShipStationServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('hkonnet/laravel-shipstation', 'shipstation',     __DIR__.'/');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['shipstation'] = $this->app->share(function ($app) {
            return new ShipStation;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('shipstation');
    }

}
