<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */
Route::get('/', function(){

    return view('welcome');
});

Route::get('/', [FrontendController::class, 'index']);
Route::get('view-cake/{slug}', [FrontendController::class, 'viewcake']);



Auth::routes();

Route::post('add-to-cart', [CartController::class, 'addcake']);
Route::post('delete-cart-item',[CartController::class,'deletecake']);
Route::post('update-cart',[CartController::class,'updatecake']);

Route::post('payment', [FrontendController::class, '']);


Route::middleware(['auth'])->group(function () {

    Route::get('cart', [CartController::class, 'viewcart']);
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('placeorder', [CheckoutController::class, 'placeorder']);
    Route::get('my-orders', [UserController::class, 'index']);
    Route::get('vieworders/{id}', [UserController::class, 'view']);

Route::get('razorpay-payment', [CheckoutController::class, 'check']);
Route::post('razorpay-payment', [CheckoutController::class, 'store'])->name('razorpay.payment.store');
    // Route::post('proceed-to-pay',[CheckoutController::class,'razor']);


});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'Admin\FrontendController@index');

    Route::get('categories', 'Admin\CategoryController@index');

    Route::get('add-category', 'Admin\CategoryController@add');
    Route::post('insert-category', 'Admin\CategoryController@insert');
    Route::get('edit-cake/{id}', [CategoryController::class, 'edit']);
    Route::put('update-cake/{id}', [CategoryController::class, 'update']);
    Route::get('delete-cake/{id}', [CategoryController::class, 'delete']);


    Route::get('orders', [OrderController::class, 'index']);
    Route::get('admin/vieworders/{id}', [OrderController::class, 'view']);

Route::put('updateorder/{id}', [OrderController::class, 'update']);
Route::get('orderhistory', [OrderController::class, 'history']);

Route::get('users', [DashboardController::class, 'users']);
Route::get('viewusers/{id}', [DashboardController::class, 'viewusers']);

// Route::get('/user', [UserController::class, 'index']);

});
