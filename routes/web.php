<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeksiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/seksi', [SeksiController::class, 'index'])->name('seksi.index');
Route::get('/seksi/create', [SeksiController::class, 'create'])->name('seksi.create');
Route::post('/seksi', [SeksiController::class, 'store'])->name('seksi.store');
Route::get('/seksi/show/{id}', [SeksiController::class, 'show'])->name('seksi.show');
Route::get('/seksi/edit/{id}', [SeksiController::class, 'edit'])->name('seksi.edit');
Route::put('/seksi/update/{id}', [SeksiController::class, 'update'])->name('seksi.update');
Route::delete('/seksi/delete/{id}', [SeksiController::class, 'destroy'])->name('seksi.destroy');

Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');
Route::post('/jabatan', [JabatanController::class, 'store'])->name('jabatan.store');
Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('jabatan.edit');
Route::put('/jabatan/update/{id}', [JabatanController::class, 'update'])->name('jabatan.update');
Route::delete('/jabatan/delete/{id}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');

Route::get('/cuti', [CutiController::class, 'index'])->name('cuti.index');
Route::get('/cuti/create', [CutiController::class, 'create'])->name('cuti.create');
Route::post('/cuti', [CutiController::class, 'store'])->name('cuti.store');
Route::get('/cuti/edit/{id}', [CutiController::class, 'edit'])->name('cuti.edit');
Route::put('/cuti/update/{id}', [CutiController::class, 'update'])->name('cuti.update');
Route::delete('/cuti/delete/{id}', [CutiController::class, 'destroy'])->name('cuti.destroy');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


require __DIR__.'/auth.php';
