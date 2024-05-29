<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\BookController::class, 'index'])->name('index');
Route::get('/books/{id}/edit', [App\Http\Controllers\BookController::class, 'edit'])->name('edit');
Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create'])->name('create');



// Route::get('/book', [App\Http\Controllers\BookController::class, 'index']);

Route::post('/books/store', [App\Http\Controllers\BookController::class, 'store'])->name('store');

Route::patch('/books/{id}/modify', [App\Http\Controllers\BookController::class, 'modify'])->name('modify');

Route::delete('/books/{id}/delete', [App\Http\Controllers\BookController::class, 'delete']);
