<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('home');
Route::match(['get', 'post'], 'registration', [UserController::class, 'userRegistration'])->name('registration');
Route::match( ['get', 'post'], 'login', [UserController::class, 'userLogin'])->name('login');
