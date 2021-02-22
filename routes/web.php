<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Menampilkan daftar produk(Prefix)
Route::prefix('category') -> group(function(){
    Route::get('/marbel-edu-game',[ProductController::class,'marbeledugame']);
    Route::get('/marbel-and-friends-kids-game',[ProductController::class,'marbelandfriendskidsgame']);
    Route::get('/riri-story-book',[ProductController::class,'riristorybook']);
    Route::get('/kolak-kids-songs',[ProductController::class,'kolakkidssongs']);
});