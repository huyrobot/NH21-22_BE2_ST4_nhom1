<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index(){
        return view('register');
    }
    // function register(Request $request){
    //     $request->flash();
    //     echo "Register Info";
    //     echo "Name :". $request->old('firstName') ." ". $request->old('surname') ."<br>";
    //     echo "Phone :". $request->old('phone') ."<br>";
    //     echo "Date of birth :". $request->old('ngay') ."/". $request->old('thang') ."/". $request->old('nam') ."<br>";
    //     echo "Gender :". $request->old('radio')."<br>";

    // }
    function register(Request $request){
        $request->flash();
        $data = $request ->tname;
        return view('welcome',['name'=>$data]);
    }
}
