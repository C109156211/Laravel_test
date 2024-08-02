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


}