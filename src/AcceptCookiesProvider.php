<?php

namespace TJGazel\Laravel\AcceptCookies;

use Illuminate\Support\ServiceProvider;

class AcceptCookiesProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'accept-cookies');
        $this->publishes([__DIR__ . '/../config/config.php' => config_path('accept-cookies.php')], 'accept-cookies-config');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'accept-cookies');
        $this->publishes([__DIR__ . '/../views' => base_path('resources/views/vendor/accept-cookies')], 'accept-cookies-views');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AcceptCookies::class, function ($app) {
            return new AcceptCookies;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [AcceptCookies::class];
    }
}