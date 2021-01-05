<?php

use Illuminate\Support\Facades\Route;
use LambdaDigamma\MMPlaces\Controllers\PlaceController;

/**
 * ------------------------------
 * Places General
 * ------------------------------
 */
 
Route::put('/places/{anyplace}', [PlaceController::class, 'update'])->name('places.update');