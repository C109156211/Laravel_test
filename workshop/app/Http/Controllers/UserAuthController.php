<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function Login()
    {
        return '登入測試';
    }

    public function profile($id)
    {
        return 'my id : '.$id;
    }

    public function SignUp()
    {
        $binding = [
            'title' => '註冊',
            'sub_title' => '123456',
        ];
        return view( 'auth.signup' , $binding);
    }

    public function SignIn()
    {
        $binding = [
            'title' => '登入',
        ];
        return view( 'auth.signin' , $binding);
    }
}