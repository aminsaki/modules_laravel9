<?php

use Illuminate\Support\Facades\Route;
use \torfeh\modules\products\Http\Controllers;


Route::get('/products', [Controllers\ProductController::class, 'index']);


////baskets
Route::post('AddToBasket', [Controllers\BasketController::class, 'create']);
Route::post('checkout_cart', [Controllers\BasketController::class, 'show']);
