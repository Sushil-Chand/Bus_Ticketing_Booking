<?php

use Illuminate\Support\Facades\Route;
use App\Enums\UserType;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusScheduleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.mainhome');
});


require __DIR__ . '/web/mainhome.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    require __DIR__ . '/web/profile.php'; // profile route group
    require __DIR__ . '/web/seat.php';
    require __DIR__ . '/web/about.php';
    require __DIR__ . '/web/contact.php';

    Route::get('/bus_schedules/details/{id}', [BusScheduleController::class, 'showBusSchedule'])->name('bus-schedule.show');
    Route::get('/book_bus/{seatId}', [BusScheduleController::class, 'bookBus'])->name('book_bus');


});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'userType:' . UserType::User])->group(function () {
    require __DIR__ . '/web/user.php';
 //view seat
});


Route::middleware(['auth', 'userType:' . UserType::Admin])->group(function () {
    require __DIR__ . '/web/admin.php'; // admin route group
 
    require __DIR__ . '/web/driver.php';
    require __DIR__ . '/web/operator.php';
    require __DIR__ . '/web/buses.php';
    require __DIR__. '/web/region.php';
    require __DIR__. '/web/sub_region.php';
    require __DIR__. '/web/bus_schedule.php';
    
    
});





