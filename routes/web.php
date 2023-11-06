<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ExpenseController;

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

Route::get('/home', function () {
    return view('home');
})->name('home');



Route::controller(ScheduleController::class)->group(function() {
    Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::get('/schedule', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/schedule/store', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::put('/schedule/accept/{schedule}', [ScheduleController::class, 'accept'])->name('schedule.accept');
    Route::put('/schedule/cancel/{schedule}', [ScheduleController::class, 'cancel'])->name('schedule.cancel');

});

Route::controller(BillController::class)->group(function() {
    Route::get('/bill', [BillController::class, 'index'])->name('bill');
    Route::get('/bill/show', [BillController::class, 'show'])->name('bill.show');
    Route::get('/bill/history', [BillController::class, 'history'])->name('bill.history');
    // Route::get('/bill/create', [BillController::class, 'create'])->name('bill.create');
    // Route::post('/bill/store', [BillController::class, 'store'])->name('bill.store');
});

Route::controller(ExpenseController::class)->group(function() {
    Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expense.create');
    Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
