<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UsersController;

//Route Landingpage
Route::get('/', function () {
    return view('welcome');
});

//Route Auth
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('todoLogin', [LoginController::class, 'todoLogin'])->name('todoLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//Route Group
Route::group(['middleware' => ['auth']], function() {
    //Route Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    //Route Users
    Route::resource('Users', UsersController::class);
});