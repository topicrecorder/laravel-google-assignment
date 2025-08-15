<?php

use App\Http\Controllers\GoogleAuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login/google', [GoogleAuthController::class, 'redirect'])->name('google.redirect');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callback'])->name('google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->middleware('auth');

Route::get('/email', [App\Http\Controllers\EmailController::class, 'index'])->middleware('auth');

Route::get('/todos', [App\Http\Controllers\ToDosController::class, 'index'])->middleware('auth');