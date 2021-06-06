<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardController;

require __DIR__.'/auth.php';

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/authors/{author:slug}/books', [AuthorController::class, 'books'])->name('authors.books');
    Route::get('/authors/{author:slug}', [AuthorController::class, 'show'])->name('authors.show');
    Route::delete('/authors/{author:slug}', [AuthorController::class, 'destroy'])->name('authors.destroy');

    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/{book:slug}', [BookController::class, 'show'])->name('books.show');
    Route::delete('/books/{book:slug}', [BookController::class, 'destroy'])->name('books.destroy');

    Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
    Route::get('/genres/create', [GenreController::class, 'create'])->name('genres.create');
    Route::post('/genres', [GenreController::class, 'store'])->name('genres.store');
    Route::get('/genres/{genre:slug}/books', [GenreController::class, 'books'])->name('genres.books');
    Route::get('/genres/{genre:slug}', [GenreController::class, 'show'])->name('genres.show');
    Route::get('/genres/{genre:slug}/edit', [GenreController::class, 'edit'])->name('genres.edit');
    Route::put('/genres/{genre:slug}', [GenreController::class, 'update'])->name('genres.update');
    Route::delete('/genres/{genre:slug}', [GenreController::class, 'destroy'])->name('genres.destroy');

});
