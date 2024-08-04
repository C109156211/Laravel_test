<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{

    // public function Test()
    // {
    //     $binding = [
    //         'title' => '註冊',
    //         'sub_title' => '123456',
    //     ];

    //     return view('auth.test',$binding);
    // }

    public function Login()
    {
        $binding = [
            'title' => '登入',
        ];
        return view( 'auth.login' , $binding);
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

    public function SignUpProcess()
    {
        $form_data = request() -> all();
        dd($form_data);
    }

}