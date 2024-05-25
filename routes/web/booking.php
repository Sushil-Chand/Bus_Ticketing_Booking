
<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;


Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::patch('/seat{id}', [BookingController::class, 'cancelBooking'])->name('booking.cancel');


