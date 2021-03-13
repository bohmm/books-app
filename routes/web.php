<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/authors/{author:slug}/books', [AuthorController::class, 'books'])->name('authors.books');

    Route::get('/books', [BookController::class, 'index'])->name('books.index');

    Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
    Route::get('/genres/{genre:slug}/books', [GenreController::class, 'books'])->name('genres.books');

});
