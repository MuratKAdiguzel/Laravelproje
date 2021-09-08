<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('home');
});



Route::get("/books",[BookController::class,'index'])->name("index");
Route::post("books/create",[BookController::class,'create'])->name("create");

Route::get('create', function () {
    return view('create');
});



Route::get("/books{book}",[BookController::class,"destroy"])->name("books.destroy");

Route::put('/books/{book}', [BookController::class, 'store'])->name('books.update');
Route::get("/books/{book}/edit",[BookController::class,"edit"])->name("books.edit");



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


