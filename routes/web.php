<?php

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
