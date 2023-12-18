<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
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
})->name('/');


// Route::get('/about', function () {
    // return view('about');
// });

Route::get('about', [PageController::class, 'about']);

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::get('articles/{id}',[ArticleController::class, 'show'])->name('articles.show');

Route::post('/articles',[ArticleController::class, 'store'])->name('articles.store');