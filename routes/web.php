<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RSVPController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [IndexController::class, 'index']);
Route::post('/rsvp', [RSVPController::class, 'store'])->name('store');



/*
Route::get('/', function () {
    return Inertia('index.vue');
});
*/
