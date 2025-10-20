<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Mockery\Generator\StringManipulation\Pass\Pass;

// Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('index');
});