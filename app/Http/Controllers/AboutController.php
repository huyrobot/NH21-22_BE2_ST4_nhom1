<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function aboutFunction(){
        return view('about');
    }
}
