<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VenteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('articles', ArticleController::class);
Route::get('articles/{article}/buy', [VenteController::class, 'buyForm'])->name('articles.buyForm');
Route::post('articles/{article}/buy', [VenteController::class, 'buy'])->name('articles.buy');

