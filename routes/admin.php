<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookRequestController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('admin')->group(function () {
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin.home');
    Route::resource('/users', UserController::class);
    Route::resource('/admins', AdminUserController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/author', AuthorController::class);
    Route::resource('/book-request', BookRequestController::class);
    Route::resource('/orders',OrderController::class);
	Route::get('order/{order}/show-factor',[OrderController::class,'showFactor'])->name('orders.show-factor');
	Route::get('order/{order}/show-factor/details',[OrderController::class,'details'])->name('orders.show-factor.details');
	Route::get('order/{order}/change-status',[OrderController::class,'changeOrderStatus'])->name('orders.change.status');
    
	Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});

\Illuminate\Support\Facades\Auth::routes();
