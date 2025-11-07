<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\PageController::class, 'showHome'])->name('home');

Route::get('/about', [App\Http\Controllers\PageController::class, 'showAbout'])->name('about');

Route::get('/contact', [App\Http\Controllers\PageController::class, 'showContact'])->name('contact');