
<?php

use App\Http\Controllers\BusController;
use Illuminate\Support\Facades\Route;
// <!-- Buses Routes -->
        Route::get('/buses', [BusController::class, 'index'])->name('buses.index');
        Route::get('/buses/create', [BusController::class, 'create'])->name('buses.create');
        Route::post('/buses/store', [BusController::class, 'store'])->name('buses.store');
      
        Route::get('/buses/edit{id}', [BusController::class, 'edit'])->name('buses.edit');
        Route::patch('/buses/update{id}', [BusController::class, 'update'])->name('buses.update');
        Route::delete('/buses/{id}', [BusController::class, 'destroy'])->name('buses.destroy');