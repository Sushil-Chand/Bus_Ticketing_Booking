<?php

use App\Http\Controllers\Sub_RegionController;
use Illuminate\Support\Facades\Route;

Route::get('/sub_regions', [Sub_RegionController::class, 'index'])->name('sub_regions.index');
Route::get('/sub_regions/create', [Sub_RegionController::class, 'create'])->name('sub_regions.create');
Route::post('/sub_regions/store', [Sub_RegionController::class, 'store'])->name('sub_regions.store');
Route::get('/sub_regions/edit/{id}', [Sub_RegionController::class, 'edit'])->name('sub_regions.edit');
Route::PUT('/sub_regions/update/{id}', [Sub_RegionController::class, 'update'])->name('sub_regions.update');
Route::delete('/sub_regions/{id}', [Sub_RegionController::class, 'destroy'])->name('sub_regions.destroy');
