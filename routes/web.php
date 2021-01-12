<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/table-view', [App\Http\Controllers\HomeController::class, 'tableView'])->name('table-view');
