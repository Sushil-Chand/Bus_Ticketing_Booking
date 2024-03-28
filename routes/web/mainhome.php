<?php


use App\Http\Controllers\mainhomeController;
use Illuminate\Support\Facades\Route;
Route::get('/Home', [mainhomeController::class, 'index'])->name('mainhome');