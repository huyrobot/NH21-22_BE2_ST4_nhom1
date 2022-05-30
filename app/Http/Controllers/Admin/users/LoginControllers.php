<?php

namespace App\Http\Controllers\Admin\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class LoginControllers extends Controller
{

    public function index(){
        return view('admin.login',['title' => 'Đăng nhập Admin']);
    }
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        //get account
        $account =  User::where('email',$request->input('email'))->get();


        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            //'level' => 1
        ], $request->input('remember'))){

            session()->put("kiemTraDangNhap", $request->input('email'));
            session()->put("account", $account);
            return redirect()->route('admin');
        }

        //session()->flash('error', 'email hoặc mật khẩu không chính xác');
        Session::flash('error','Email hoặc Mật khẩu sai!');
        return redirect()->back();
    }
    public function logout(){
        Auth::logout();

        //session()->put("kiemTraDangNhap", 'Giá trị khi logout');
        session()->forget('kiemTraDangNhap');
        session()->forget('cart');
        session()->forget('account');
        return redirect('/');
    }
}
