<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ControllerDauTien;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogdetailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ShopingController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//      Route cu
// Route::get('/', function () {
//     return view('register');
// });
// Route::post('register', function (Request $request) {
//     echo "Name :". $request->tname;

// });

// Route::post('register', function (Request $request) {
//     echo "Name :". $request->firstName ." ". $request->surname ."<br>";
//     echo "Phone :". $request->phone ."<br>";
//     echo "Date of birth :". $request->ngay ."/". $request->thang ."/". $request->nam ."<br>";
//     echo "Date of birth :". $request->radio."<br>";

// });

<<<<<<< HEAD
Route::get('/', [ControllerDauTien::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/blog-detail', [BlogdetailController::class, 'blogdetail']);
Route::get('/shoping-cart', [ShopingController::class, 'shop']);
Route::get('/productdetail', [ProductDetailController::class, 'productD']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/product', [ControllerDauTien::class, 'index']);
=======
Route::get('/', [HomeController::class, 'index']);
>>>>>>> 9ec98fa93f2f1a83c158b8f30c8507579c5dd67e
Route::post('register', [ControllerDauTien::class, 'register']);
// Route::resource('/product', ProductController::class);
/*
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
*/