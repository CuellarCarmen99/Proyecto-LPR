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
Route::get('/', function () {

    return view('welcome');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/config', 'UserController@config')->name('config');
Route::get('/store', 'ProductController@show')->name('store');
Route::resource('product', 'ProductController');
Route::resource('sale', 'SaleController');
Route::resource('provider', 'ProviderController');
Route::resource('category', 'CategoryController');
Route::resource('bill', 'BillController');

Route::get('correo', 'MailController@getMail');

