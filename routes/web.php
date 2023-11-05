<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Console\Scheduling\Schedule;
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
    return view('home');
})->name('home');

Route::controller(ScheduleController::class)->group(function() {
    Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::get('/schedule', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/schedule/store', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::put('/schedule/accept/{schedule}', [ScheduleController::class, 'accept'])->name('schedule.accept');
    Route::put('/schedule/cancel/{schedule}', [ScheduleController::class, 'cancel'])->name('schedule.cancel');
    
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



// Route::resource('/room', RoomController::class);


// require __DIR__.'/auth.php';
