<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers as Controller;
Route::get('baskets',[Controller\BasketController::class,'index']);
