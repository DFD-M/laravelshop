<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home3Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/category/{cat}',   [ProductController::class,'showCategory'])->name('showCategory');
Route::get('/category/{cat}/{product_id}',[ProductController::class,'show'])->name('showProduct');
// Route::post('/ad',[HomeController::class,'add'])->name('ad');
// Route::get('/cart',[CartController::class,'take'])->name('cartIndex');
// Route::post('/add-to-cart',[CartController::class,'addToCart'])->name('addToCart');

//admin
Route::post('/update/{id}',[AdminController::class,'update_function']);
Route::post('/add_data',[AdminController::class,'save']);
Route::post('/check',[ProductsController::class,'check']);

Route::get('/click_delete/{id}',[AdminController::class,'delete_function']);
Route::get('/admin/products',[AdminController::class,'display']);
Route::get('/admin/productsview',[AdminController::class,'viewform']);
Route::get('/productadd',[AdminController::class,'display']);
Route::get('admin/click_edit/{id}',[AdminController::class,'edit_function']);
Route::get('/admin/productsview',[AdminController::class,'index']);

//cart
Route::get('cart',[ProductsController::class,'cart'])->name('cartIndex')->middleware('auth');;
Route::get('add-to-cart/{id}',[ProductsController::class,'addToCart'])->name('addToCart');
Route::patch('update-cart',[ProductsController::class,'update']);
Route::delete('remove-from-cart',[ProductsController::class,'remove']);



Auth::routes();
Route::get('/home2',[\App\Http\Controllers\Home3Controller::class,'index'])->name('home2');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
