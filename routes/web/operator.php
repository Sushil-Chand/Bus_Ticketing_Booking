<?php


use App\Http\Controllers\OperatorController;
use Illuminate\Support\Facades\Route;

// Operator Routes
        Route::get('/operators', [OperatorController::class, 'index'])->name('operators.index');
        Route::get('/operators/create', [OperatorController::class, 'create'])->name('operators.create');
        Route::post('/operators/store', [OperatorController::class, 'store'])->name('operators.store' );
        Route::get('/operators/{id}', [OperatorController::class, 'show'])->name('operators.show');
        Route::get('/operators/{id}/edit', [OperatorController::class, 'edit'])->name('operators.edit');
        Route::put('/operators/{id}', [OperatorController::class, 'update'])->name('operators.update');
        Route::delete('/operators/{id}', [OperatorController::class, 'destroy'])->name('operators.destroy');