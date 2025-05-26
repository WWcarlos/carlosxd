<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/{id}',[BookController::class,'edit'])->name('books.edit');
Route::post('/books',[BookController::class,'store'])->name('books.store');
Route::put('/books/{id}',[BookController::class,'update'])->name('books.update');
Route::delete('/books/{id}',[BookController::class,'destroy'])->name('books.destroy');

Route::get('/authors',[AuthorController::class,'index'])->name('authors.index');
Route::get('/authors/{id}',[AuthorController::class,'edit'])->name('authors.edit');
Route::post('/authors',[AuthorController::class,'store'])->name('authors.store');
Route::put('/authors/{id}',[AuthorController::class,'update'])->name('authors.update');
Route::delete('/authors/{id}',[AuthorController::class,'destroy'])->name('authors.destroy');