<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VenteController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::resource('articles', ArticleController::class);
Route::resource('ventes', VenteController::class);

Route::get('articles/{article}/buy', [VenteController::class, 'buyForm'])->name('articles.buyForm');
Route::post('articles/{article}/buy', [VenteController::class, 'buy'])->name('articles.buy');
