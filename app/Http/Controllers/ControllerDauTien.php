<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDauTien extends Controller
{
    function index(){
        return view('index');
    }
    function register(Request $request){
        $request->flash();
        echo "Name :". $request->old('tname');
        // echo "Name :". $request->tname;

    }
}
