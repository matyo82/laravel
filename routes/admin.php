<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\NevisandehController;
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

Route::group([],function () {
          Route::get('/', function () {
                    return view('admin.index');
                })->name('admin-index')->middleware('admin');
                Route::resource('/users', UserController::class)->middleware('admin');
                Route::resource('/admins', AdminUserController::class)->middleware('admin');
                Route::resource('/product', ProductController::class)->middleware('admin');
                Route::resource('/categorie', CategorieController::class)->middleware('admin');
                Route::resource('/nevisandeh', NevisandehController::class)->middleware('admin');
            
                Route::get('/user/profile', function () {
                    // Uses first & second middleware...
                })->middleware('admin');
});
