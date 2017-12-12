<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Paraman\ParametersManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        ParametersManager::extend('date','App\Date');
    }
}
