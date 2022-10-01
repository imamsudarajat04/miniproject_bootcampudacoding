<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

//Khusus Route Auth
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('todoLogin', [LoginController::class, 'todoLogin'])->name('todoLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');