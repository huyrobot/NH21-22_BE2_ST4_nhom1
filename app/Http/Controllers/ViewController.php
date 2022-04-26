<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Blog;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewFunction ($namePage = 'index') {
        if($namePage == 'index'){
            $productArray = Products::all()->take(20);//get 20 products
            return view($namePage,['data'=>$productArray]);
        }
        if ($namePage == 'blog'){
            $productArray1 = Blog::all()->take(20);
            return view($namePage,['data1'=>$productArray1]);
        }
        else{
            //tìm product có hastag = man
            $data2 = Products::find(1)->hastagProductRelationship->toArray();//trả về mảng của bảng Hastag Product
            return view($namePage,['data2'=>$data2]);
    }
}
}