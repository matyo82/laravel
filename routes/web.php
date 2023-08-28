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

    Route::resource('/categorie', \App\Http\Controllers\CategorieController::class)->middleware('admin');
    Route::resource('/nevisandeh', \App\Http\Controllers\NevisandehController::class)->middleware('admin');
    Route::resource('/product', \App\Http\Controllers\ProductController::class)->middleware('admin');

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    })->middleware('admin');
});

Auth::routes();

