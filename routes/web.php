<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test1', function () {
    return "HI rell";
})->name('test1');;
Route::get('/test2', function () {
    return "HI jarell";
})->name('test2');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/chart', function () {
    return view('chart');
})->middleware(['auth', 'verified'])->name('chart');

Route::get('/table', function () {
    return view('table');
})->middleware(['auth', 'verified'])->name('table');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
