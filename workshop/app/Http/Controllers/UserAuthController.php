<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;
use Mail;


class UserAuthController extends Controller
{
    public function Login()
    {
        $binding = [
            'title' => '登入',
        ];
        return view( 'auth.login' , $binding);
    }


    public function LoginProcess()
    {
        $form_data = request()->all();
        dd($form_data);
    }


    public function profile($id)
    {
        return 'my id : '.$id;
    }

    public function SignUp()
    {
        $binding = [
            'title' => '註冊',
            'sub_title' => '測試',
        ]; 
        return view( 'auth.signup' , $binding);
    }

    public function SignUpProcess()
    {
        $form_data = request()->all();
        // dd($form_data );
        if($form_data['password'] == "" || $form_data['email']== "" || $form_data['name'] == "" ){
            return redirect('/user/auth/signup')
            ->withInput()
            ->withErrors(['資料不齊全','請檢查所有欄位並填滿']);
        }
        else{
            if ($form_data['password'] == "" || $form_data['email'] == "" || $form_data['name'] == "" ){
                return redirect('/user/auth/signup')
                ->withInput()
                ->withErrors('Email已存在');
            }

            $user = User::create([
                'email' => $form_data['email'],
                'password' => Hash::make($form_data['password']),
                'type' => $form_data['type'],
                'nickname' => $form_data['name'],
            ]);

            Mail::send('email.signUpEmailNotification', [
                'nickname' => $form_data['name']
            ], function($message) use ($form_data) {
                $message->to($form_data['email'], $form_data['name'])
                    ->from('cccc1030026@gmail.com')
                    ->subject('Laravel 8 Mail Test');
            });

            dd($user);
        }
    }

    public function SignIn()
    {
        $binding = [
            'title' => '登入',
        ];
        return view( 'auth.signin' , $binding);
    }


}