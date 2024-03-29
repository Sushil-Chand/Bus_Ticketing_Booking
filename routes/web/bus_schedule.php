<?php
use App\Http\Controllers\BusScheduleController;
use Illuminate\Support\Facades\Route;

Route::get('/bus_schedules', [BusScheduleController::class, 'index'])->name('bus_schedules.index');
Route::get('/bus_schedules/create', [BusScheduleController::class, 'create'])->name('bus_schedules.create');
Route::post('/bus_schedules/store', [BusScheduleController::class, 'store'])->name('bus_schedules.store');
Route::get('/bus_schedules/edit{id}', [BusScheduleController::class, 'edit'])->name('bus_schedules.edit');
Route::put('/bus_schedules/Update{id}', [BusScheduleController::class, 'update'])->name('bus_schedules.update');
Route::delete('/bus_schedules/delet/{id}', [BusScheduleController::class, 'destroy'])->name('bus_schedules.destroy');
