<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    function blogDetailFunction(){
        return view('blog-detail');
    }
}
