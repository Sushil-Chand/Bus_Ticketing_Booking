<?php
//Admin-user view

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-user', [UserController::class, 'userindex'])->name('user.index');
Route::get('/admin-user/{id}', [UserController::class, 'update'])->name('user.status');


// Route::match(['get', 'put'], 'admin-user/{id}', 'UserController@update')->name('admin-user');

