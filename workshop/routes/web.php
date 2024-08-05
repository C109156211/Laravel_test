<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// 建立user群組路由
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {

        // 登入
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login')->name('user.auth.login');
        Route::post('login', 'App\Http\Controllers\UserAuthController@LoginProcess');

        // 註冊
        Route::get('signup', 'App\Http\Controllers\UserAuthController@SignUp')->name('user.auth.signup');
        Route::post('signup', 'App\Http\Controllers\UserAuthController@SignUpProcess');

        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@profile');
        Route::get('signin', 'App\Http\Controllers\UserAuthController@SignIn');

        // 首頁
        Route::get('home', 'App\Http\Controllers\UserAuthController@Home')->name('user.auth.home');

        // 登出
        Route::get('signout', 'App\Http\Controllers\UserAuthController@SignOut')->name('user.auth.signout');

    });
});

// 建立merchandise群組路由
Route::group(['prefix' => 'merchandise'], function () {
    Route::get('{merchandise_id}', 'App\Http\Controllers\MerchandiseController@MerchandiseItemPage');
});

