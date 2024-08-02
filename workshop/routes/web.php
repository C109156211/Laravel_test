<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// 建立user群組路由
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login');
        Route::get('signup', 'App\Http\Controllers\UserAuthController@SignUp');
        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@profile');
        Route::get('signin', 'App\Http\Controllers\UserAuthController@SignIn');

    });
});

// 建立merchandise群組路由
Route::group(['prefix' => 'merchandise'], function () {
    Route::get('{merchandise_id}', 'App\Http\Controllers\MerchandiseController@MerchandiseItemPage');
});

