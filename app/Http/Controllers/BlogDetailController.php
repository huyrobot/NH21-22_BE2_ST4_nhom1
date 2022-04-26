<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogDetailController extends Controller
{
    function blogDetailFunction($id){
        $blogDetail = Blog::findOrFail($id);
        return view('blog-detail',['data1'=>$blogDetail]);
    }
}
