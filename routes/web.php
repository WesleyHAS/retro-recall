<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Game Route
Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::post('/games/add/{id}', [GameController::class, 'addToUserGames'])->name('games.add')->middleware('auth');


Route::get('/login', function() {
  // return your login view
})->name('login');

Route::get('/register', function() {
  // return your registration view
})->name('register');

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

use App\Http\Controllers\UserController;

Route::get('/my-games', [UserController::class, 'myGames'])->name('my-games')->middleware('auth');
Route::post('/my-games/remove/{id}', [UserController::class, 'removeFromUserGames'])->name('my-games.remove')->middleware('auth');


Route::get('/', function () {
    return view('home');
});
