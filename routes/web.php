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



Route::get("/kitaplar",[kitapcontroller::class,'index'])->name("index");
Route::post("/kitapekleform",[kitapcontroller::class,'ekle'])->name("verigiris");
Route::get('welcome', function () {
    return view('welcome');
});



Route::get("/kitapsil{id}",[kitapcontroller::class,"sil"])->name("sil");

Route::put('/books/{book}', [kitapcontroller::class, 'store'])->name('books.update');
Route::get("/books/{book}/edit",[kitapcontroller::class,"edit"])->name("books.edit");


