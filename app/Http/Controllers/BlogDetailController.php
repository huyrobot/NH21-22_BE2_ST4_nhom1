<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BlogDetailController extends Controller
{
    function blogDetailFunction(){
        return view('blog-detail');
    }
}
