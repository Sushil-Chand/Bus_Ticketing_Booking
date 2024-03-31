<?php

use App\Http\Controllers\SeatController;
use Illuminate\Support\Facades\Route;

// Route::get('/seats', [SeatController::class, 'showSeatsView'])->name('seats.index');
// Route::get('/seatss', [SeatController::class, 'index'])->name('seat.index');
// Route::post('/seats/book', [SeatController::class, 'bookSeats'])->name('seats.book');
Route::post('/seats', [SeatController::class, 'createSeats'])->name('seats.create');
