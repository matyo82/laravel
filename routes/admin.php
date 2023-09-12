<?php

use App\Http\Controllers\Admin\AdminUserController;
//use App\Http\Controllers\Admin\CategoryController;
//use App\Http\Controllers\Admin\CategoryChildrenController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookRequestController;
use App\Http\Controllers\Admin\UserController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\OrderController;
=======
//use App\Http\Controllers\Admin\ProductController;
>>>>>>> 9b8acd4f20609d4cc124bfb7c49d1a103a4c7d70
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

<<<<<<< HEAD
Route::middleware('admin')->group(function () {
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin.home');
    Route::resource('/users', UserController::class);
    Route::resource('/admins', AdminUserController::class);
    Route::resource('/product', ProductController::class);
    //Route::resource('/category', CategoryController::class);
    //Route::resource('/category-childs', CategoryChildrenController::class);
    Route::resource('/author', AuthorController::class);
    Route::resource('/book-request', BookRequestController::class);
<<<<<<< HEAD
    Route::resource('/orders',OrderController::class);
	Route::get('order/{order}/show-factor',[OrderController::class,'showFactor'])->name('orders.show-factor');
	Route::get('order/{order}/show-factor/details',[OrderController::class,'details'])->name('orders.show-factor.details');
    
=======

>>>>>>> 9b8acd4f20609d4cc124bfb7c49d1a103a4c7d70
	Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});

\Illuminate\Support\Facades\Auth::routes();
