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

Route::group(['namespace' => 'App\Http\Controllers\Personal', 'prefix' => 'personal', 'middleware' => ['auth']], function () { 
    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
        Route::get('/', 'IndexController')->name('personal.main.index');
    });
    Route::group(['namespace' => 'Author', 'prefix' => 'authors'], function () {
        Route::get('/', 'IndexController')->name('personal.author.index');
    });
    Route::group(['namespace' => 'Genre', 'prefix' => 'genres'], function () {
        Route::get('/', 'IndexController')->name('personal.genre.index');
    });
    Route::group(['namespace' => 'Book', 'prefix' => 'books'], function () {
        Route::get('/{book}', 'ShowController')->name('personal.book.show');
        Route::group(['namespace' => 'Comment', 'prefix' => '{book}/comments'], function () {
            Route::post('/', 'StoreController')->name('book.comment.store');
        });
        Route::group(['namespace' => 'Like', 'prefix' => '{book}/likes'], function () {
            Route::post('/', 'StoreController')->name('book.like.store');
        });
    });
    Route::group(['namespace' => 'Liked', 'prefix' => 'liked'], function () {
        Route::get('/', 'IndexController')->name('personal.liked.index');
        Route::delete('/{book}', 'DestroyController')->name('personal.liked.delete');
    });
    Route::group(['namespace' => 'Comment', 'prefix' => 'comments'], function () {
        Route::get('/', 'IndexController')->name('personal.comment.index');
        Route::delete('/{comment}', 'DestroyController')->name('personal.comment.delete');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('personal.comment.update');     
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () { 
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
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
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.delete');
    });
});

// Route::get('/test', function () {
//     return '<h5>test</h5>';
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
