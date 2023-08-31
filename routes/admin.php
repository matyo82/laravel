<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\NevisandehController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductController;
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

Route::group([ ] , function () {
          Route::get('/', function () {
                    return view('admin.index');
                })->name('admin.home');
                Route::resource('/users', UserController::class);
                Route::resource('/admins', AdminUserController::class);
                Route::resource('/product', ProductController::class);
                Route::resource('/categorie', CategorieController::class);
                Route::resource('/nevisandeh', NevisandehController::class);

                Route::get('/user/profile', function () {
                    // Uses first & second middleware...
                });
})->middleware('admin');
