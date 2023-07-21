<?php

use App\Http\Controllers\BoatController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    // Add Boat
    Route::post('/dashboard/add-boat',[BoatController::class,'store'])->name('dashboard.add.boat');
    // Update Boat Details
    Route::post('/dashboard/update-boat',[BoatController::class,'updateboat'])->name('dashboard.update.boat');
    // View Boat Details
    Route::get('/dashboard/view/{id}',[BoatController::class,'viewboat'])->where('id', '[0-9]+')->name('dashboard.view');
    // Print Boat Details
    Route::get('/dashboard/print/{id}',[BoatController::class,'printboat'])->where('id', '[0-9]+')->name('dashboard.print');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
