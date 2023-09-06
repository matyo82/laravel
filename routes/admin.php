<?php

use App\Http\Controllers\Admin\AdminUserController;
//use App\Http\Controllers\Admin\CategoryController;
//use App\Http\Controllers\Admin\CategoryChildrenController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookRequestController;
use App\Http\Controllers\Admin\UserController;
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

Route::middleware('admin')->prefix('')->group(function () {
    Route::get('/', function () {
		
        return view('admin.index');
    })->name('admin.home');
    Route::resource('/users', UserController::class);
    Route::resource('/admins', AdminUserController::class);
    Route::resource('/product', ProductController::class);
    //Route::resource('/category', CategoryController::class);
    //Route::resource('/category-childs', CategoryChildrenController::class);
    Route::resource('/author', AuthorController::class);
    Route::resource('/book-request', BookRequestController::class);
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
