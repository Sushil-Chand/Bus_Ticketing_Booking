<?php

use App\Http\Controllers\SeatController;
use Illuminate\Support\Facades\Route;

Route::get('/seats', [SeatController::class, 'index'])->name('seat.index');
Route::get('/viewSeat/{id}', [SeatController::class, 'showBusSchedule'])->name('buses.viewseats');

Route::post('/seats/book{id}', [SeatController::class, 'bookBus'])->name('seats.book');
// Route::post('/seats', [SeatController::class, 'createSeats'])->name('seats.create');
