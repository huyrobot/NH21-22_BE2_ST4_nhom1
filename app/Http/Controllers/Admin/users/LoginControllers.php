<?php

namespace App\Http\Controllers\Admin\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginControllers extends Controller
{
    public function index(){
        return view('admin.login',['title' => 'Đăng nhập Admin']);
    }
}
