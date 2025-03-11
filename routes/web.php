<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Ajax\LocationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', [AuthController::class, 'index'])->name('auth.admin');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');


/* USER */
Route::group(['prefix' => 'user'], function () {
    Route::get('index', [UserController::class, 'index'])->name('user.index');
    Route::get('create', [UserController::class, 'create'])->name('user.create');
});

/* AJAX */
Route::get('ajax/location/getLocation', [LocationController::class, 'getLocation'])->name('ajax.location.index');