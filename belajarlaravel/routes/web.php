<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;


Route::get('/', [DashboardController::class, 'dashboard']);


Route::get('/register', [FormController::class, 'daftar']);


Route::post('/welcome', [FormController::class, 'welcome']);


Route::get('/master', function () {
    return view('layouts.master');
});
?>