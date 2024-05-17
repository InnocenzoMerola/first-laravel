<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');



Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.createBook');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');