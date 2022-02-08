<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
  Route::resource('/dashboard', DashboardController::class);

  Route::resource('/usuario', UserController::class);
  Route::get('/profile',[UserController::class, 'profile'])->name('profile');
  Route::post('/profile-update',[UserController::class, 'profileUpdate'])->name('profile.update');

  Route::resource('about', AboutController::class);
});

// Route::middleware(['auth'])->group(function () {


// });



Route::post('usuario/update-is-active/{usuario}', [UserController::class, 'updateIsActive'])->name('usuario.updateIsActive');

