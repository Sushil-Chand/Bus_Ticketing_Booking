<?php

//Admin

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-dashboard', [AdminController::class, 'home'])->name('admin.home');
Route::get('/admin-user', [AdminController::class, 'userindex'])->name('user.index');
Route::get('/admin-user/{id}', [AdminController::class, 'update'])->name('user.status');
// Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard'])->name('admindashboard');