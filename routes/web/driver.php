
<?php

use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;

Route::get('/drivers', [DriverController::class, 'index'])->name('drivers.index');

Route::get('/drivers/create', [DriverController::class, 'create'])->name('drivers.create');

Route::POST('/drivers', [DriverController::class, 'store'])->name('drivers.store');

Route::get('/drivers/{driver}', [DriverController::class, 'show'])->name('drivers.show');
Route::get('/drivers/{driver}/edit', [DriverController::class, 'edit'])->name('drivers.edit');

Route::put('/drivers/{update}', [DriverController::class, 'update'])->name('drivers.update');
Route::delete('/drivers/{delete}', [DriverController::class, 'destroy'])->name('drivers.destroy');
