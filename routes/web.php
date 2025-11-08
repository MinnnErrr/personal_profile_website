<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\PageController::class, 'showHome'])->name('home');

Route::get('/about', [App\Http\Controllers\PageController::class, 'showCA22062'])->name('CA22062');

Route::get('/contact', [App\Http\Controllers\PageController::class, 'showContact'])->name('contact');

Route::get('/CB24017', [App\Http\Controllers\PageController::class, 'showCB24017'])->name('CB24017');
