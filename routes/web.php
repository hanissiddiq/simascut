<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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


require __DIR__.'/auth.php';
