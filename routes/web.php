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
    Route::resource('users', 'UserController');
    Route::resource('places', 'PlaceController');
    Route::resource('restaurants', 'RestaurantController');
    Route::resource('hotels', 'HotelController');
    Route::post('hotels/actions/images/{id}', 'HotelController@insertPhotos');
    Route::post('hotels/actions/deleteImage', 'HotelController@deleteImage');
    Route::resource('rooms', 'RoomController');
    Route::resource('villages', 'VillageController');
    Route::post('villages/actions/images/{id}', 'VillageController@insertPhotos');
    Route::post('villages/actions/deleteImage', 'VillageController@deleteImage');
    Route::resource('stores', 'StoreController');
    Route::post('stores/actions/images/{id}', 'StoreController@insertPhotos');
    Route::post('stores/actions/deleteImage', 'StoreController@deleteImage');
    Route::resource('hospitals', 'HospitalController');
    Route::post('hospitals/actions/images/{id}', 'HospitalController@insertPhotos');
    Route::post('hospitals/actions/deleteImage', 'HospitalController@deleteImage');
    Route::resource('orders', 'OrderController');
});