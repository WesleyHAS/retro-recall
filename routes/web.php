<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Game Route
Route::get('/games', [GameController::class, 'index'])->name('games.index');

Route::get('/login', function() {
  // return your login view
})->name('login');

Route::get('/register', function() {
  // return your registration view
})->name('register');


Route::get('/', function () {
    return view('home');
});
