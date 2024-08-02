<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// 建立群組路由
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login');
        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@profile');
    });
});
