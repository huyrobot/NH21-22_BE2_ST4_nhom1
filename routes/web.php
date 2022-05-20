<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ShopingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\HastagBlogController;
use App\Http\Controllers\HastagProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TransactionHistoryController;
use App\Http\Controllers\WishlishController;
use App\Http\Controllers\YourCartController;
use App\Models\Products;
use App\Http\Controllers\Admin\users\LoginControllers;

Route::get('admin/login',[LoginControllers::class, 'index']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // BLOG
    Route::get('/blog-crud', [BlogController::class , 'getBlog']
    )->name('boxBlog.crudBlog');
    Route::get('/blog-crud/addBlog', [BlogController::class , 'add']
    )->name('boxBlog.addBlog');
    Route::post('/blog-crud/save', [BlogController::class , 'save']
    )->name('boxBlog.saveBlog');
    Route::get('/blog-crud/delete/{id}', [BlogController::class , 'delete']
    )->name('boxBlog.delete');
    Route::get('/blog-crud/editBlog/{id}', [BlogController::class , 'edit'])->name('boxBlog.edit');
    Route::post('/blog-crud/update/{id}', [BlogController::class , 'update'])->name('boxBlog.update');
    //Products
    Route::get('/products-crud', [ProductController::class,'getProduct'])
    ->name('boxProducts.crudProducts');
    Route::get('/products-crud/add-product',[ProductController::class,'add']
    )->name('boxProducts.addProduct');
    Route::post('/products-crud/save', [ProductController::class , 'save']
    )->name('boxProducts.save');
    Route::get('/products-crud/delete/{id}', [ProductController::class , 'delete']
    )->name('boxProducts.delete');
    Route::get('/products-crud/editProduct/{id}', [ProductController::class , 'edit'])->name('boxProducts.edit');
    Route::post('/products-crud/update/{id}', [ProductController::class , 'update'])->name('boxProducts.update');


    //Coupon
    Route::get('/coupon-crud', [CouponController::class,'getCoupon']
    )->name('boxCoupon.crudCoupon');
    Route::get('/coupon-crud/addCoupon', [CouponController::class , 'add']
    )->name('boxCoupon.addCoupon');
    Route::post('/coupon-crud/save', [CouponController::class , 'save']
    )->name('boxCoupon.saveCoupon');
    Route::get('/coupon-crud/delete/{coupon_codecoupon_code}', [CouponController::class , 'delete']
    )->name('boxCoupon.delete');
    Route::get('/coupon-crud/editCoupon/{id}', [CouponController::class , 'edit'])->name('boxCoupon.edit');
    Route::post('/coupon-crud/update/{id}', [CouponController::class , 'update'])->name('boxCoupon.update');


    //Hastag Product
    Route::get('/hastagproducts-crud', [HastagProductController::class,'getHastag'] )->name('boxHastagProducts.crudHastagProducts');
    Route::get('/hastagproducts/addHastagProduct', [HastagProductController::class , 'add']
    )->name('boxHastagProducts.addHastagProduct');
    Route::post('/hastagproducts/save', [HastagProductController::class , 'save']
    )->name('boxHastagProducts.saveHastagProduct');
    Route::get('/hastagproducts/delete/{coupon_codecoupon_code}', [HastagProductController::class , 'delete']
    )->name('boxHastagProducts.delete');
    Route::get('/hastagproducts-crud/editHastagProduct/{id}', [HastagProductController::class , 'edit'])->name('boxHastagProducts.edit');
    Route::post('/hastagproducts-crud/update/{id}', [HastagProductController::class , 'update'])->name('boxHastagProducts.update');


    //Hastag Blog
    Route::get('/hastagblog-crud', [HastagBlogController::class,'getHastag']
    )->name('boxHastagBlog.crudHastagBlog');
    Route::get('/hastagblog-crud/addHastagBlog', [HastagBlogController::class , 'add']
    )->name('boxHastagBlog.addHastagBlog');
    Route::post('/hastagblog-crud/save', [HastagBlogController::class , 'save']
    )->name('boxHastagBlog.saveHastagBlog');
    Route::get('/hastagblog-crud/delete/{blog_id}', [HastagBlogController::class , 'delete']
    )->name('boxHastagBlog.delete');
    Route::get('/hastagblog-crud/editHastagBlog/{id}', [HastagBlogController::class , 'edit'])->name('boxHastagBlog.edit');
    Route::post('/hastagblog-crud/update/{id}', [HastagBlogController::class , 'update'])->name('boxHastagBlog.update');

    //Order
    Route::get('/order-crud', [OrderController::class,'getOrder']
    )->name('boxOrder.crudOrder');
    Route::get('/order-crud/addOrder', [OrderController::class , 'add']
    )->name('boxOrder.addOrder');
    Route::post('/order-crud/save', [OrderController::class , 'save']
    )->name('boxOrder.saveOrder');
    Route::get('/order-crud/delete/{blog_id}', [OrderController::class , 'delete']
    )->name('boxOrder.delete');
    Route::get('/order-crud/editHastagBlog/{id}', [OrderController::class , 'edit'])->name('boxOrder.edit');
    Route::post('/order-crud/update/{id}', [OrderController::class , 'update'])->name('boxOrder.update');

    //Review
    Route::get('/review-crud', [ReviewController::class,'getReView'])->name('boxReview.crudReview');
    Route::get('/review-crud/addReView', [ReviewController::class , 'add']
    )->name('boxReview.addReView');
    Route::post('/review-crud/save', [ReviewController::class , 'save']
    )->name('boxReview.saveReView');
    Route::get('/review-crud/delete/{blog_id}', [ReviewController::class , 'delete']
    )->name('boxReview.delete');
    Route::get('/review-crud/editHastagBlog/{id}', [ReviewController::class , 'edit'])->name('boxReview.edit');
    Route::post('/review-crud/update/{id}', [ReviewController::class , 'update'])->name('boxReview.update');

    //History
    Route::get('/history-crud', [TransactionHistoryController::class,'getHistory']
    )->name('boxHistory.crudHistory');
    Route::get('/history-crud/addHistory', [TransactionHistoryController::class , 'add']
    )->name('boxHistory.addHistory');
    Route::post('/history-crud/save', [TransactionHistoryController::class , 'save']
    )->name('boxHistory.saveHistory');
    Route::get('/history-crud/delete/{id}', [TransactionHistoryController::class , 'delete']
    )->name('boxHistory.delete');
    Route::get('/history-crud/editHastagBlog/{id}', [TransactionHistoryController::class , 'edit'])->name('boxHistory.edit');
    Route::post('/history-crud/update/{id}', [TransactionHistoryController::class , 'update'])->name('boxHistory.update');


    //WishLish
    Route::get('/wishlist-crud', [WishlishController::class,'getWishLish']
    )->name('boxWishList.crudWishList');
    Route::get('/wishlist-crud/addWishLish', [WishlishController::class , 'add']
    )->name('boxWishList.addWishLish');
    Route::post('/wishlist-crud/save', [WishlishController::class , 'save']
    )->name('boxWishList.saveWishLish');
    Route::get('/wishlist-crud/delete/{id}', [WishlishController::class , 'delete']
    )->name('boxWishList.delete');
    Route::get('/wishlist-crud/editWishLish/{id}', [WishlishController::class , 'edit'])->name('boxWishList.edit');
    Route::post('/wishlist-crud/update/{id}', [WishlishController::class , 'update'])->name('boxWishList.update');


    Route::get('/cart-crud', [YourCartController::class,'getCart']
    )->name('boxCart.crudCart');
    Route::get('/cart-crud/addCart', [YourCartController::class , 'add']
    )->name('boxCart.addCart');
    Route::post('/cart-crud/save', [YourCartController::class , 'save']
    )->name('boxCart.saveCart');
    Route::get('/cart-crud/delete/{id}', [YourCartController::class , 'delete']
    )->name('boxCart.delete');
    Route::get('/cart-crud/editCart/{id}', [YourCartController::class , 'edit'])->name('boxCart.edit');
    Route::post('/cart-crud/update/{id}', [YourCartController::class , 'update'])->name('boxCart.update');
});
require __DIR__.'/auth.php';

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


//show product by hastag
Route::get('/{namePage?}/{hastag_name?}', [ViewController::class, 'viewFunction']);
