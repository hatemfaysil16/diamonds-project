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

Route::group(['prefix' => 'admin','middleware' => 'guest:admin', 'namespace' => 'Admin\Auth'], function () {
	Route::get('login','AdminAuthController@getLogin')->name('adminLogin');
    Route::post('login', 'AdminAuthController@postLogin')->name('adminLoginPost');
    Route::get('logout', 'AdminAuthController@logout')->name('adminLogout');
});

Route::group(['prefix' => 'admin','middleware' => 'admin:auth', 'namespace' => 'Admin'], function () {
	Route::get('dashboard','AdminController@dashboard')->name('dashboard');	
    Route::resource('admins', 'AdminController');
});