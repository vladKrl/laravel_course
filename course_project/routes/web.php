<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\MyFirstController,
    App\Http\Controllers\AuthorController,
    App\Http\Controllers\GenreController,
    App\Http\Controllers\BookController;


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

Route::get('/', [BookController::class, 'index']);
// [MyLifeController::class, 'levan']

// AUTHOR

// Read Author
Route::get('/authors', [AuthorController::class, 'index'])->name('author.index');

// Create Author
Route::get('/authors/create', [AuthorController::class, 'create'])->name('author.create');
Route::post('/authors', [AuthorController::class, 'store'])->name('author.store');

// Show Author
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('author.show');

// Edit Author
Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('author.edit');
Route::patch('/authors/{author}', [AuthorController::class, 'update'])->name('author.update');

// Delete Author
Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('author.delete');;
// firstOrCreate Author
// Route::get('/authors/first_or_create', [AuthorController::class, 'firstOrCreate']);
// firstOrUpdate Author
// Route::get('/authors/update_or_create', [AuthorController::class, 'updateOrCreate']);


// GENRE

// Read Genre
Route::get('/genres', [GenreController::class, 'index'])->name('genre.index');

// Create Genre
Route::get('/genres/create', [GenreController::class, 'create'])->name('genre.create');
Route::post('/genres', [GenreController::class, 'store'])->name('genre.store');

// Show Genre
Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genre.show');

// Edit Genre
Route::get('/genres/{genre}/edit', [GenreController::class, 'edit'])->name('genre.edit');
Route::patch('/genres/{genre}', [GenreController::class, 'update'])->name('genre.update');

// Delete Genre
Route::delete('/genres/{genre}', [GenreController::class, 'destroy'])->name('genre.delete');;


// BOOK

// Read Book
Route::get('/books', [BookController::class, 'index'])->name('book.index');

// Create Book
Route::get('/books/create', [BookController::class, 'create'])->name('book.create');
Route::post('/books', [BookController::class, 'store'])->name('book.store');

// Show Genre
Route::get('/books/{book}', [BookController::class, 'show'])->name('book.show');

// Edit Book
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::patch('/books/{book}', [BookController::class, 'update'])->name('book.update');

// Delete Book
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('book.delete');
// Route::get('/genres', [GenreController::class, 'index'])->name('genre.index');