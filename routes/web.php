<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kitapcontroller;

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


Route::get('/', function () {
    return view('welcome');
});


/*Route::get("/ekle",[kitapcontroller::class,'ekle']);
Route::get("/guncelle",[kitapcontroller::class,'guncelle']);
Route::get("/sil",[kitapcontroller::class,'sil']);
Route::get("/kitapbilgileri",[kitapcontroller::class,'kitapbilgileri']);*/

Route::get("/kitaplar",[kitapcontroller::class,'index']);