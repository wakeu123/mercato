<?php

use App\Admin\Controllers\CategoryController;
use App\Admin\Controllers\ProduitController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
});
Route::group([
    'prefix'        => config('admin.route.prefix'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource('produit', ProduitController::class);
    $router->resource('category', CategoryController::class);
});
