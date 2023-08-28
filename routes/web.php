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
    })->name('admin-index');
	
	
    Route::resource('/users/admin', \App\Http\Controllers\AdminUserController::class);
    Route::resource('/categorie', \App\Http\Controllers\CategorieController::class);
    Route::resource('/nevisandeh', \App\Http\Controllers\NevisandehController::class);

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
