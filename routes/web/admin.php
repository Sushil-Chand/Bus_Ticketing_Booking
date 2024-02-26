<?php

//Admin

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/admin-dashboard', [AdminController::class, 'home'])->name('admin.home');
