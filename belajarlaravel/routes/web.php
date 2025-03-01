<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\genrecontroler;


Route::get('/', [DashboardController::class, 'dashboard']);


Route::get('/register', [FormController::class, 'daftar']);


Route::post('/welcome', [FormController::class, 'welcome']);


Route::get('/master', function () {
    return view('layouts.master');
});

//cretae
Route::get('/genre/create', [genrecontroler::class, 'create']);
Route::post('/genre', [genrecontroler::class, 'store']);

//read
Route::get('/genre', [genrecontroler::class, 'index']);
Route::get('/genre/{id}', [genrecontroler::class, 'show']);

//update
Route::get('/genre/{id}/edit', [genrecontroler::class, 'edit']);
Route::put('/genre/{id}', [genrecontroler::class, 'update']);

//delete
Route::delete('/genre/{id}', [genrecontroler::class, 'destroy']);
?>