<?php

use App\Http\Controllers\Api\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WishlistController;
use App\Http\Controllers\Api\GamePriceHistoryController;

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/genres', [GameController::class, 'genres']);
Route::get('/games/platforms', [GameController::class, 'platforms']);
Route::get('/games/{slug}', [GameController::class, 'show']);
Route::get('/wishlist', [WishlistController::class, 'index']);
Route::post('/wishlist', [WishlistController::class, 'store']);
Route::delete('/wishlist/{slug}', [WishlistController::class, 'destroy']);
Route::get('/games/{slug}/price-history', [GamePriceHistoryController::class, 'show']);