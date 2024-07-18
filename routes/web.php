<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/author', 'author')->name('author');




Route::get('book', [BookController::class, 'show'])->name('book');