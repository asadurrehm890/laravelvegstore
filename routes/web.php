<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\authenController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\blogsController;
use App\Http\Controllers\contactsController;

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

Route::get('/', [productsController::class,'index6'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('shop', [productsController::class,'index2'])->name('shop');
Route::get('shop1', [productsController::class,'index3'])->name('shop1');
Route::get('shop2', [productsController::class,'index4'])->name('shop2');
Route::post('searchproducts', [productsController::class,'index5'])->name('search');

Route::get('/blog',[blogsController::class, 'index2'])->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin', function(){
     return view('admin.dashboard');
})->name('admin')->middleware('checkadmin');

Route::get('registeration', [authenController::class, 'register'])->name('register');
Route::get('login', [authenController::class, 'login'])->name('login');

Route::post('registerpost', [authenController::class, 'registerpost'])->name('newuser');
Route::post('loginuser', [authenController::class, 'loginuser'])->name('loginuser');

Route::post('setsuperuser', [authenController::class, 'setsuperuser'])->name('setsuperuser');

Route::get('setadmin',function(){
  return view('admin.setadmin');
})->name('setadmin');

Route::resource('products', productsController::class);
Route::resource('blogs', blogsController::class);
Route::resource('carts', cartController::class)->middleware('auth');

Route::post('inc',[cartController::class, 'inc'])->name('inc');
Route::post('dec',[cartController::class, 'dec'])->name('dec');

Route::get('checkout',[cartController::class, 'checkout'])->name('checkout')->middleware('auth');

Route::get('wishlist',[cartController::class, 'showlist'])->name('wishlist')->middleware('auth');
Route::post('storewishlist',[cartController::class, 'storewish'])->name('storewishlist');
Route::post('delwishlist',[cartController::class, 'destroywish'])->name('delwishlist');


Route::post('order', [ordersController::class, 'order'])->name('order');
Route::get('orders', [ordersController::class, 'disp'])->name('disporders');


Route::get('thanks', function(){
   return view('thanks');
})->name('thanks');


Route::post('storecont', [contactsController::class, 'storefunc'])->name('storecont');

Route::get('conts', [contactsController::class, 'disp'])->name('conts');
