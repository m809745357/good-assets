<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('/configs', ConfigController::class);

    $router->resource('/projects', ProjectController::class);

    $router->resource('/tidings', TidingController::class);

    $router->resource('/properties', PropertyController::class);

});
