<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function indexFunction(){
        return view('index');
    }
    function register(Request $request){
        $request->flash();
        echo "Name :". $request->old('tname');
        // echo "Name :". $request->tname;

    }
}
