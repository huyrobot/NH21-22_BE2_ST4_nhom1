<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\HastagProduct;
use App\Models\Products;
use App\Models\HastagBlog;
class BlogDetailController extends Controller
{
//    function blogDetailFunction($id){
//        $blogDetail = Blog::findOrFail($id);
//        return view('blog-detail',['data1'=>$blogDetail]);
//    }
    function blogDetailFunction($id){
        $blogDetail = Blog::findOrFail($id);
        $hastag = HastagProduct::all()->take(5);
        $product = Products::orderBy('id','desc')->get()->take(3);
        $hastag_blog = HastagBlog::all()->take(3);
        $hastagOfBlog = HastagBlog::where('blog_id', $id)->get();
        return view('blog-detail',['data1'=>$blogDetail,'hastag_products'=>$hastag,
            'products'=>$product,'hastag_blog'=>$hastag_blog,
            'hastagOfBlog'=>$hastagOfBlog
        ]);

    }

}
