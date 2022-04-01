<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ControllerDauTien;
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

Route::get('/', [HomeController::class, 'index']);
Route::post('register', [ControllerDauTien::class, 'register']);
Route::resource('/product', ProductController::class);
/*
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
*/