<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/books', [BookController::class, 'list'])->name('book.list');
Route::get('/books/create', [BookController::class, 'create'])->name('book.create');
Route::get('/books/{id}', [BookController::class, 'detail'])->name('book.detail');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('book.edit');