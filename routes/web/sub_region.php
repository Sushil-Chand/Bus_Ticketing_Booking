<?php

use App\Http\Controllers\Sub_RegionController;
use Illuminate\Support\Facades\Route;


// Display a listing of the resource.
Route::get('/sub_regions', [Sub_RegionController::class, 'index'])->name('sub_regions.index');

// Show the form for creating a new resource.
Route::get('/sub_regions/create', [Sub_RegionController::class, 'create'])->name('sub_regions.create');

// Store a newly created resource in storage.
Route::post('/sub_regions/store', [Sub_RegionController::class, 'store'])->name('sub_regions.store');


// Show the form for editing the specified resource.
Route::get('/sub_regions/edit/{id}', [Sub_RegionController::class, 'edit'])->name('sub_regions.edit');

// Update the specified resource in storage.
Route::PUT('/sub_regions/update/{id}', [Sub_RegionController::class, 'update'])->name('sub_regions.update');

// Remove the specified resource from storage.
Route::delete('/sub_regions/{id}', [Sub_RegionController::class, 'destroy'])->name('sub_regions.destroy');
