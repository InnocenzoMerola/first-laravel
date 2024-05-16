<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/books', [BookController::class, 'list'])->name('books.list');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::get('/books/{id}', [BookController::class, 'detail'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');