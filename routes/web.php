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
    return view('layout.home');
});


Route::prefix('customers')->group(function () {
    Route::get('/','CustomerController@index')->name('customers.index');
});


Route::prefix('room')->group(function (){
    Route::get('/list','RoomController@index')->name('room_list');
});
