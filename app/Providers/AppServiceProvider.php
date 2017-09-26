<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $this->app->register('App\Providers\ComposerServiceProvider');
        if ($this->app->environment('local')) {
            $this->app->register('Orangehill\Iseed\IseedServiceProvider');
        }
    }
}
