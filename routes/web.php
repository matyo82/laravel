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


Route::get('shop' , [\App\Http\Controllers\front\Shop::class , 'index']);
Route::get('test' , function(){
          return view('front/product-details');
}); // for check views

Auth::routes();
