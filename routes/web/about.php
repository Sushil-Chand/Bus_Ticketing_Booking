
<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;


Route::get('/busbook', [AboutController::class, 'index'])->name('busboks');