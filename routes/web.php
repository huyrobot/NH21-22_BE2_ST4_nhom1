<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HastagBlogController;
use App\Http\Controllers\HastagProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ShopingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\users\LoginControllers;
use App\Http\Controllers\Admin\users\RegisterControllers;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Services\UploadService;

Route::get('admin/login',[LoginControllers::class, 'index'])->name('login');
Route::post('admin/login/store',[LoginControllers::class, 'store']);

Route::get('/register',[RegisterControllers::class, 'index']);
Route::post('/register',[RegisterControllers::class, 'insertUser']);

Route::get('/logout', [LoginControllers::class, 'logout']);

Route::middleware(['auth','goToAdmin'])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/',[MainController::class, 'index'])->name('admin');
        Route::get('/main',[MainController::class, 'index']);
        //Route::get('/logout',[MainController::class, 'logoutAdmin']);

        //menu
        Route::prefix('menus')->group(function (){
            Route::get('addProduct',[ProductController::class, 'addProduct']);
            Route::get('updateProduct/{id}',[ProductController::class, 'updateProduct']);
            Route::put('updateProduct/{id}/updateProductExcute',[ProductController::class, 'updateProductExcute']);
            Route::post('insert-product',[ProductController::class, 'insertProduct']);
            Route::get('delete-product/{id}', [ProductController::class,'destroy']);

            //upload
            //Route::post('upload/service',[UploadService::class,'store']);

            Route::get('addBlog',[BlogController::class, 'addBlog']);
            Route::get('updateBlog/{id}',[BlogController::class, 'updateBlog']);
            Route::put('updateBlog/{id}/updateBlogExcute',[BlogController::class, 'updateBlogExcute']);
            Route::post('insert-blog',[BlogController::class, 'insertBlog']);
            Route::get('delete-Blog/{id}', [BlogController::class,'destroy']);

            Route::get('addUsers',[UserController::class, 'addUsers']);
            Route::get('updateUsers/{id}',[UserController::class, 'updateUsers']);
            Route::put('updateUsers/{id}/updateUsersExcute',[UserController::class, 'updateUsersExcute']);
            Route::post('insert-Users',[UserController::class, 'insertUsers']);
            Route::get('delete-Users/{id}', [UserController::class,'destroy']);

            Route::get('addHastagProduct',[HastagProductController::class, 'addHastagProduct']);
            Route::get('updateHastagProduct/{id}',[HastagProductController::class, 'updateHastagProduct']);
            Route::put('updateHastagProduct/{id}/updateHastagProductExcute',[HastagProductController::class, 'updateHastagProductExcute']);
            Route::post('insert-HastagProduct',[HastagProductController::class, 'insertHastagProduct']);
            Route::get('delete-HastagProduct/{id}', [HastagProductController::class,'destroy']);

            Route::get('addHastagBlog',[HastagBlogController::class, 'addHastagBlog']);
            Route::get('updateHastagBlog/{id}',[HastagBlogController::class, 'updateHastagBlog']);
            Route::put('updateHastagBlog/{id}/updateHastagBlogExcute',[HastagBlogController::class, 'updateHastagBlogExcute']);
            Route::post('insert-HastagBlog',[HastagBlogController::class, 'insertHastagBlog']);
            Route::get('delete-HastagBlog/{id}', [HastagBlogController::class,'destroy']);

            Route::get('delete-Comment/{id}', [CommentController::class,'destroy']);

            Route::get('listUsers',[UserController::class, 'showListUsers']);
            Route::get('listProduct',[ProductController::class, 'showListProduct']);
            Route::get('listBlog',[BlogController::class, 'showListBLog']);
            Route::get('listHastagProduct',[HastagProductController::class, 'showListHastagProduct']);
            Route::get('listHastagBlog',[HastagBlogController::class, 'showListHastagBlog']);
            Route::get('listComment',[CommentController::class, 'showListComment']);
            Route::get('listOrder',[OrderController::class, 'showlistOrder']);
            Route::get('confirm-order/{id}',[OrderController::class, 'confirm']);
            Route::get('order-item/{id}',[OrderItemController::class, 'showOrderItem']);



        });
    });


});



//require __DIR__.'/auth.php';

//Route::get('/{namePage?}', [ViewController::class, 'viewFunction']);
//Route::get('/product-detail/{id}', [ProductDetailController::class, 'productDetailFunction']);
//Route::get('/blog-detail/{id}', [BlogDetailController::class, 'blogDetailFunction']);
//Route::get('/layout_product', [ProductsController::class]);

//product detail
Route::get('/product-detail/{id}', [ProductDetailController::class, 'showDetail']);

Route::get('/blog-detail/{id}', [BlogDetailController::class, 'blogDetailFunction']);

//add to cart
Route::get('/Add-Cart/{id}',[ShopingController::class, 'AddCart']);

//add to cart has name page
Route::get('/{namePage?}/Add-Cart/{id}',[ShopingController::class, 'AddCartHasNamePage']);

//del item cart
Route::get('/Delete-Item-Cart/{id}',[ShopingController::class, 'DeleteItemCart']);

//del item cart has name page
Route::get('/{namePage?}/Delete-Item-Cart/{id}',[ShopingController::class, 'DeleteItemCartHasNamePage']);

//del item List cart in shoping cart
Route::get('/Delete-Item-List-Cart/{id}',[ShopingController::class, 'DeleteListItemCart']);

//save item List cart in shoping cart
Route::get('/Save-Item-List-Cart/{id}/{qty}',[ShopingController::class, 'SaveListItemCart']);

//edit all list cart in shoping cart
Route::post('/Save-All',[ShopingController::class, 'SaveAllListItemCart']);

//Del all list cart in shoping cart
Route::post('/Del-All',[ShopingController::class, 'DelAllListItemCart']);

//check out
Route::get('checkout',[CheckoutController::class,'index']);
Route::post('/Place-Order',[CheckoutController::class,'placeorder']);

//comment product
Route::post('/load-comment',[CommentController::class,'load_comment']);
Route::post('/send-comment',[CommentController::class,'send_comment']);

//show product by hastag
Route::get('/{namePage?}/{hastag_name?}', [ViewController::class, 'viewFunction']);
