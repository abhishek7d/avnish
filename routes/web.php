<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
})->name('home');


Route::get('about',[HomeController::class,'about_us'])->name('about');
Route::get('package',[HomeController::class,'package'])->name('package');
Route::get('book-form',[HomeController::class,'book_form'])->name('book_form');

Route::post('post_book_form',[HomeController::class,'post_book_form'])->name('post_book_form');
