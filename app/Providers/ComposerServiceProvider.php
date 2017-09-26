<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Config;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 使用基于闭包的 composers...
        \View::composer('*', function ($view) {
            $view->with(
                'configs',
                Config::all()->mapWithKeys(function ($item) {
                    return [$item['name'] => [
                        'value' => $item['value'],
                        'description' => $item['description']
                    ]];
                })->toArray()
            );
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
