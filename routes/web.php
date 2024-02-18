<?php


use Illuminate\Support\Facades\Route;
use App\Enums\UserType;

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
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    require __DIR__ . '/web/profile.php'; // profile route group
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'userType:' . UserType::User])->group(function () {
    require __DIR__ . '/web/user.php'; // user route group
    
});

Route::middleware(['auth', 'userType:' . UserType::Admin])->group(function () {
    require __DIR__ . '/web/admin.php'; // sdmin route group
    require __DIR__ . '/web/adminuser.php';
    
});



