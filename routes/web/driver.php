
<?php


use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;

Route::get('/drivers', [DriverController::class, 'index'])->name('drivers.index');

// Route to display the form for creating a new driver
Route::get('/drivers/create', [DriverController::class, 'create'])->name('drivers.create');

// Route to store a new driver in the database
Route::POST('/drivers', [DriverController::class, 'store'])->name('drivers.store');

// Route to display the details of a specific driver
Route::get('/drivers/{driver}', [DriverController::class, 'show'])->name('drivers.show');

// Route to display the form for editing a specific driver
Route::get('/drivers/{driver}/edit', [DriverController::class, 'edit'])->name('drivers.edit');

// Route to update a specific driver in the database
Route::put('/drivers/{driver}', [DriverController::class, 'update'])->name('drivers.update');

// Route to delete a specific driver from the database
Route::delete('/drivers/{driver}', [DriverController::class, 'destroy'])->name('drivers.destroy');