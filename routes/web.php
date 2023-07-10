<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\AdminController;
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

//homecontroller


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [HomeController::class, 'products']);
Route::get('/productdetails/{id}', [HomeController::class, 'productdetails']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/orders', [HomeController::class, 'orders']);

//cartcontroller

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/{id}', [CartController::class, 'cartpost'])->name('cart.post');
Route::get('/remove_cart/{id}', [CartController::class, 'remove']);
Route::get('/cash_order', [CartController::class, 'cash_order']);

//authcontroller

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginpost'])->name('login.post');
Route::get('/account', [AuthController::class, 'account'])->name('account');
Route::post('/account', [AuthController::class, 'accountpost'])->name('account.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//admincontroller

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::post('/admin', [AdminController::class, 'adminpost'])->name('admin.post');
Route::get('/viewproducts', [AdminController::class, 'viewproducts']);
Route::get('/vieworders', [AdminController::class, 'vieworders']);
Route::get('/addproducts', [AdminController::class, 'addproducts']);
Route::get('/removeproduct/{id}', [AdminController::class, 'remove']);
Route::get('/removeorder/{id}', [AdminController::class, 'removeorder']);