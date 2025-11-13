<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'showHome'])->name('home');

Route::get('/CA22062', [App\Http\Controllers\PageController::class, 'showCA22062'])->name('CA22062');

Route::get('/contact', [App\Http\Controllers\PageController::class, 'showContact'])->name('contact');

Route::get('/CB24017', [App\Http\Controllers\PageController::class, 'showCB24017'])->name('CB24017');

Route::get('/CD22076', [App\Http\Controllers\PageController::class, 'showCD22076'])->name('CD22076');
Route::get('/CB22109', [App\Http\Controllers\PageController::class, 'showCB22109'])->name('CB22109');
