<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\MovieController;
use App\Http\Models;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BooksController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BooksController::class, 'create'])->name('buku.create');
Route::post('/buku/store', [BooksController::class, 'store'])->name('buku.store');
Route::delete('buku/{id}', [BooksController::class, 'destroy'])->name('buku.destroy');
Route::put('/buku/{id}', [BooksController::class, 'update'])->name('buku.update');
Route::get('/buku/{id}/edit', [BooksController::class, 'edit'])->name('buku.edit');


Route::get('/movie', [MovieController::class, 'index']);



