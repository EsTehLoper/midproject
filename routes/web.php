<?php

use Illuminate\Support\Facades\Route;


Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index']);



Route::get('/', function () {
    return view('welcome');
});
