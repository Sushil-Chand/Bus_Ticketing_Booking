<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;


// Display a listing of the resource.
Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');

// Show the form for creating a new resource.
Route::get('/regions/create', [RegionController::class, 'create'])->name('regions.create');

// Store a newly created resource in storage.
Route::POST('/regions/store', [RegionController::class, 'store'])->name('regions.store');

// Show the form for editing the specified resource.
Route::get('/regions/edit/{id}', [RegionController::class, 'edit'])->name('regions.edit');

// Update the specified resource in storage.
Route::put('/regions/Update/{id}', [RegionController::class, 'update'])->name('regions.update');

// Remove the specified resource from storage.
Route::delete('/regions/delete/{id}', [RegionController::class, 'destroy'])->name('regions.destroy');
