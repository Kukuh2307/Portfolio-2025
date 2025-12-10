<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CVController;
use Mockery\Generator\StringManipulation\Pass\Pass;

Route::get('/', [PageController::class, 'index'])->name('home');

// Admin CV Routes (protected by auth middleware)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/cv/download', [CVController::class, 'downloadCV'])->name('admin.cv.download');
    Route::get('/cv/preview', [CVController::class, 'previewCV'])->name('admin.cv.preview');
});

// Route::get('/', function () {
//     return view('index');
// });