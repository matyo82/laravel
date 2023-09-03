<?php

use Illuminate\Support\Facades\Auth;
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
})->name('front.home');

Route::get('shop' , [\App\Http\Controllers\front\Shop::class , 'index']);

 Auth::routes();




 /////////////////////////////////// Test
 Route::get('test' , function(){
          return view('front/cart');
}); // for check views

Route::get('loogin' , function(){
          auth()->loginUsingId(1);
          return 'login success fully ';
});

Route::get('loogout' , function(){
          auth()->logout();
          return 'logout successfully';
});