<?php

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

Route::get('/', function () {
    return view('front.index');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin-index')->middleware('admin');
    Route::resource('/users', \App\Http\Controllers\Admin\UserController::class)->middleware('admin');
    Route::resource('/admins', \App\Http\Controllers\Admin\AdminUserController::class)->middleware('admin');
    Route::resource('/product', \App\Http\Controllers\Admin\ProductController::class)->middleware('admin');
    Route::resource('/categorie', \App\Http\Controllers\Admin\CategorieController::class)->middleware('admin');
    Route::resource('/nevisandeh', \App\Http\Controllers\Admin\NevisandehController::class)->middleware('admin');

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    })->middleware('admin');
});

Auth::routes();

