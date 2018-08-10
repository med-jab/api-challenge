<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::namespace('API')->group(function () {

    // User Controller :
    Route::name('auth.')->prefix('auth')->group(function () {
        Route::post('sign_up', 'UserController@sign_up')->name('sign_up');
        Route::post('sign_in', 'UserController@sign_in')->name('sign_in');
        Route::prefix('user')->group(function () {
            Route::get('', 'UserController@user')->name('user');
            Route::get('sign_out', 'UserController@sign_out')->name('sign_out');
        });
    });

    // Shop Controller :
    Route::name('shop.')->prefix('shop')->group(function () {
        Route::post('index', 'UserController@index')->name('index');
        Route::prefix('user')->group(function () {
            Route::get('nearby', 'UserController@nearby')->name('nearby');
            Route::get('preferred', 'UserController@preferred')->name('preferred');
            Route::post('like', 'UserController@like')->name('like');
            Route::post('dislike', 'UserController@dislike')->name('dislike');
            Route::post('remove', 'UserController@remove')->name('remove');
        });
    });

});
