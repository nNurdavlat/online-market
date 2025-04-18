<?php

use App\Http\Controllers\ProductStatusesController;
use Illuminate\Support\Facades\Route;

Route::post('/wishlist/toggle', [ProductStatusesController::class, 'toggleWishlist']);
Route::post('/cart/toggle', [ProductStatusesController::class, 'toggleCart']);
Route::get('/wishlist', [ProductStatusesController::class, 'wishlist']);
Route::get('/cart', [ProductStatusesController::class, 'cart']);
