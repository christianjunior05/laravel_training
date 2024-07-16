<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/author', 'author')->name('author');


Route::view('/book', 'book')->name('book');