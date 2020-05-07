<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'as' => 'root_path',
	'uses' => 'PagesControllers@home'
]);

Route::get('/tarif', [
	'as' => 'tarif_path',
	'uses' => 'PagesControllers@tarif'
]);

Route::get('/about', [
	'as' => 'about_path',
	'uses' => 'PagesControllers@about'
]);

Route::get('/blog', [
	'as' => 'blog_path',
	'uses' => 'PagesControllers@blog'
]);

Route::get('/contact', [
	'as' => 'contact_path',
	'uses' => 'ContactControllers@create'
]);
