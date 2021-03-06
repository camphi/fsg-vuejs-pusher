<?php

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

Route::group(['middleware' => ['web']], function () {
    Route::get('/notifications', 'HomeController@chat')->name('notifications');
    Route::get('/api/notifications', 'NotificationController@get')->name('notifications.get');
    Route::post('/api/notifications', 'NotificationController@store')->name('notifications.store');
});
