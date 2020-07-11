<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('rooms')->group(function () {
        Route::get('/', 'RoomController@index')->name('rooms.index');
        Route::get('/major', 'RoomController@showMajor')->name('rooms.major');
        Route::get('/create', 'RoomController@create')->name('rooms.create');
        Route::post('/create', 'RoomController@store')->name('rooms.store');
        Route::get('/{id}/edit', 'RoomController@edit')->name('rooms.edit');
        Route::post('/{id}/edit', 'RoomController@update')->name('rooms.update');
        Route::get('/{id}/delete', 'RoomController@delete')->name('rooms.delete');
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomerController@index')->name('customers.index');
        Route::get('/create', 'CustomerController@create')->name('customers.create');
        Route::post('/create', 'CustomerController@store')->name('customers.store');
        Route::get('/{id}/edit', 'CustomerController@edit')->name('customers.edit');
        Route::post('/{id}/edit', 'CustomerController@update')->name('customers.update');
        Route::get('/{id}/destroy', 'CustomerController@destroy')->name('customers.destroy');
        Route::get('/search', 'CustomerController@search')->name('customers.search');
        Route::get('/{id}/detail', 'CustomerController@getCustomer')->name('customers.showCustomer');
    });

    Route::prefix('booking')->group(function () {
        Route::get('/{id}/create', 'BookRoomController@index')->name('booking.index');
        Route::post('/{id}/create', 'BookRoomController@create')->name('booking.create');
        Route::get('/{id}/edit', 'BookRoomController@edit')->name('booking.edit');
        Route::get('/{id}/update', 'BookRoomController@update')->name('booking.update');
    });

    Route::prefix('bills')->group(function () {
        Route::get('/', 'BillController@index')->name('bills.index');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', 'UserController@index')->name('users.index');
    });
});



