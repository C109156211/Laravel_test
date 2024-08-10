<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthUserAdminMiddleware;


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

    // 商品管理
    Route::get('manage', 'App\Http\Controllers\MerchandiseController@MerchandiseManage')->name('merchandise.manage');
    Route::get('create', 'App\Http\Controllers\MerchandiseController@MerchandiseCreate')->middleware(AuthUserAdminMiddleware::class);

    // 商品修改、刪除   
    Route::group(['prefix' => '{merchandise_id}'], function () {
        Route::get('edit', 'App\Http\Controllers\MerchandiseController@MerchandiseEdit')->middleware(AuthUserAdminMiddleware::class);
        Route::put('/', 'App\Http\Controllers\MerchandiseController@MerchandiseEditProcess');
        Route::get('delete', 'App\Http\Controllers\MerchandiseController@MerchandiseDelete')->middleware(AuthUserAdminMiddleware::class);
    });

    // 圖片上傳
    Route::post('upload', [App\Http\Controllers\MerchandiseController::class, 'uploadImage'])->name('merchandise.upload');
});
