<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [IndexController::class, 'index']);

/*
Route::get('/', function () {
    return Inertia('index.vue');
});
*/
