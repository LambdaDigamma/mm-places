<?php

use Illuminate\Support\Facades\Route;
use LambdaDigamma\MMPlaces\Http\Controllers\PlaceController;

/**
 * ------------------------------
 * Places General
 * ------------------------------
 */

Route::put('/places/{anyplace}', [PlaceController::class, 'update'])->name('places.update');
