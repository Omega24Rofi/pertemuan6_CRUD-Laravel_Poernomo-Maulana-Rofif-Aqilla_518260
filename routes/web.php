<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\MovieController;
use App\Http\Models;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BooksController::class, 'index']);

Route::get('/movie', [MovieController::class, 'index']);

