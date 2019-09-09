<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Wordpress;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Wordpress::class, function() {
            return new Wordpress('http://host.docker.internal:8080/wp-json/wp/v2/');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
