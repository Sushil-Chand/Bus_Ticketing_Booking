<?php
//Admin-user

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/admin-user', [UserController::class, 'userindex'])->name('user.index');