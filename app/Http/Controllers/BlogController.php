<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function blogFunction(){
        return view('blog');
    }
}
