<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\HastagBlog;
use App\Models\HastagProduct;
use App\Models\Order;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\User;
class MainController extends Controller
{
//    public function index(){
//        return view('admin.home',[
//            'title' => 'Trang Admin',
//            'title2' => 'Trang Chính'
//        ]);
//    }
    public function index(){
        $product = Products::count();
        $product1 = Products::where('color_Product','=','Blue')->get()->count();
        $product2 = Products::where('color_Product','=','Brown')->get()->count();
        $product3 = Products::where('color_Product','=','Gray')->get()->count();
        $product4 = Products::where('color_Product','=','Black')->get()->count();
        $product5 = Products::where('color_Product','=','White')->get()->count();
        $product6 = Products::where('color_Product','=','Pink')->get()->count();
        $product7 = Products::where('color_Product','=','Green')->get()->count();
        $product8 = Products::where('color_Product','=','Yellow')->get()->count();
        $product9 = Products::where('color_Product','=','Orange')->get()->count();
        $product10 = Products::where('color_Product','=','Red')->get()->count();
        $product11 = Products::where('color_Product','=','Purple')->get()->count();
        $user = User::where('role','=','0')->get()->count();
        $blog = Blog::count();
        $hastagProduct = HastagProduct::count();
        $hastagBlog = HastagBlog::count();
        $comment = Comment::count();
        $order = Order::count();
        return view('admin.home',[
            'title' => 'Admin Page',
            'title2' => 'Main page'
            ,'product'=>$product
            ,'product1'=>$product1
            ,'product2'=>$product2
            ,'product3'=>$product3
            ,'product4'=>$product4
            ,'product5'=>$product5
            ,'product6'=>$product6
            ,'product7'=>$product7
            ,'product8'=>$product8
            ,'product9'=>$product9
            ,'product10'=>$product10
            ,'product11'=>$product11
            ,'user'=>$user
            ,'blog'=>$blog
            ,'hastagProduct'=>$hastagProduct
            ,'hastagBlog'=>$hastagBlog
            ,'comment'=>$comment
            ,'order'=>$order
        ]);
    }

}
