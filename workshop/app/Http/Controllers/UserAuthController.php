<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;
use Mail;


class UserAuthController extends Controller
{

    // 登入
    public function Login()
    {
        return view('auth.login');
    }

    // 登入判斷
    public function LoginProcess()
    {
        $form_data = request()->all();
        // dd($form_data);
        $user = User::where('email', $form_data['email'])->FirstOrFail();
        if (Hash::check($form_data['password'], $user->password)){
            echo '登入成功';
            session()->put('user_id', $user->id);
            session()->put('user_email', $user->email);
            # 導向到首頁
            return redirect('/user/auth/home');
        }else{
            echo '登入失敗';
            # 導向到登入頁
            return redirect('/user/auth/login')
                ->withInput()
                ->withErrors(['無此帳號','帳號密碼錯誤']);
        }
    }


    public function profile($id)
    {
        return 'my id : '.$id;
    }


    // 註冊
    public function SignUp()
    {
        $binding = [
            'title' => '註冊',
            'sub_title' => '測試',
        ]; 
        return view( 'auth.signup' , $binding);
    }

    
    // 註冊判斷
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
            // 判斷帳號是否重複
            $user = User::where('email', $form_data['email']) -> first();
            if (!is_null($user)){
                return redirect('/user/auth/signup')
                ->withInput()
                ->withErrors(['此帳號已被註冊','請更換帳號']);
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

            return redirect('/user/auth/login');
        }
    }

    // 首頁
    public function Home()
    {
        $binding = [
            'title' => '首頁',
        ]; 
        return view( 'auth.home' , $binding);

    }


    // 登出
    public function SignOut()
    {
        session()->forget('user_id');
        return redirect('/user/auth/login');
    }
}