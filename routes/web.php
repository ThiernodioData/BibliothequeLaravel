<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;

Route::get('/', [BookController::class, 'home'])->name('home');


Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::post('/books/{id}', [BookController::class, 'store'])->name('books.store');
Route::post('/reviews', [ReviewController::class, 'store']);
Route::post('/books/{book}/reviews', [ReviewController::class, 'store'])->name('reviews.store');


// page 404
Route::get('/404', function () {
    return view('errors.404');
});

