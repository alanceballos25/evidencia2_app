<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/courses', CoursesController::class)->name('index');
// Route::get('/courses', [CoursesController::class, 'index']) -> name('courses.index');
// Route::get('/courses/create', [CoursesController::class, 'create']) -> name('courses.create');
// Route::get('/courses/store', [CoursesController::class, 'store']) -> name('courses.store');
Route::get('/books', [BookController::class, 'index_1'])->name('books.index');
Route::get('/books', [BookController::class, 'index_1'])->name('index_1');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
