<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\RoomController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. The
ese
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');



Route::controller(ScheduleController::class)->group(function () {
    Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::post('/schedule/store', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::put('/schedule/accept/{schedule}', [ScheduleController::class, 'accept'])->name('schedule.accept');
    Route::put('/schedule/cancel/{schedule}', [ScheduleController::class, 'cancel'])->name('schedule.cancel');
});

Route::controller(BillController::class)->group(function () {
    Route::get('/bill', [BillController::class, 'index'])->name('bill');
    Route::get('/bill/show', [BillController::class, 'show'])->name('bill.show');
    Route::get('/bill/history', [BillController::class, 'history'])->name('bill.history');
});

Route::controller(ExpenseController::class)->group(function () {
    Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expense.create');
    Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
});

Route::controller(ComplaintController::class)->group(function () {
    Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
    Route::get('/complaints/show', [ComplaintController::class, 'show'])->name('complaints.show');
    Route::get('/complaints/create/general', [ComplaintController::class, 'general'])->name('complaints.general');
    Route::get('/complaints/create/maintenance', [ComplaintController::class, 'maintenance'])->name('complaints.maintenance');
    Route::post('/complaints/storeMain', [ComplaintController::class, 'storeMain'])->name('complaints.storeMain');
    Route::post('/complaints/storeGen', [ComplaintController::class, 'storeGen'])->name('complaints.storeGen');
    Route::post('/complaints/endMain', [ComplaintController::class, 'endMain'])->name('complaints.endMain');
    
});

Route::get('/room', [RoomController::class, 'index'])->name('room.index');

Route::get('/schedule', [ScheduleController::class, 'create'])->name('schedule.create');
Route::get('/contract/create', [ContractController::class, 'create'])->name('contract.create');
Route::post('/contract/store', [ContractController::class, 'store'])->name('contract.store');

Route::get('/all-complaint', [ComplaintController::class, 'admin'])->name('complaints.admin');

Route::post('/complaint/editMain', [ComplaintController::class, 'editMain'])->name('complaints.editMain');
Route::post('/complaint/editGen', [ComplaintController::class, 'editGen'])->name('complaints.editGen');

Route::post('/complaint/addImage', [ComplaintController::class, 'addImage'])->name('complaints.addImage');

// Route::group(['middleware' => ['checkUserRole']], function () {
//     Route::get('/schedule', [ScheduleController::class, 'create'])->name('schedule.create');
//     Route::get('/contract/create', [ContractController::class, 'create'])->name('contract.create');
//     Route::post('/contract/store', [ContractController::class, 'store'])->name('contract.store');
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
