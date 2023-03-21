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

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () { 
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });
    Route::group(['namespace' => 'Author', 'prefix' => 'authors'], function () {
        Route::get('/', 'IndexController')->name('admin.author.index');
        Route::get('/create', 'CreateController')->name('admin.author.create');
        Route::post('/', 'StoreController')->name('admin.author.store');
        Route::get('/{author}', 'ShowController')->name('admin.author.show');
        Route::get('/{author}/edit', 'EditController')->name('admin.author.edit');
        Route::patch('/{author}', 'UpdateController')->name('admin.author.update');
        Route::delete('/{author}', 'DestroyController')->name('admin.author.delete');
    });
    Route::group(['namespace' => 'Genre', 'prefix' => 'genres'], function () {
        Route::get('/', 'IndexController')->name('admin.genre.index');
        Route::get('/create', 'CreateController')->name('admin.genre.create');
        Route::post('/', 'StoreController')->name('admin.genre.store');
        Route::get('/{genre}', 'ShowController')->name('admin.genre.show');
        Route::get('/{genre}/edit', 'EditController')->name('admin.genre.edit');
        Route::patch('/{genre}', 'UpdateController')->name('admin.genre.update');
        Route::delete('/{genre}', 'DestroyController')->name('admin.genre.delete');
    });
    Route::group(['namespace' => 'Book', 'prefix' => 'books'], function () {
        Route::get('/', 'IndexController')->name('admin.book.index');
        Route::get('/create', 'CreateController')->name('admin.book.create');
        Route::post('/', 'StoreController')->name('admin.book.store');
        Route::get('/{book}', 'ShowController')->name('admin.book.show');
        Route::get('/{book}/edit', 'EditController')->name('admin.book.edit');
        Route::patch('/{book}', 'UpdateController')->name('admin.book.update');
        Route::delete('/{book}', 'DestroyController')->name('admin.book.delete');
    });
});

// firstOrCreate Author
// Route::get('/authors/first_or_create', [AuthorController::class, 'firstOrCreate']);
// firstOrUpdate Author
// Route::get('/authors/update_or_create', [AuthorController::class, 'updateOrCreate']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
