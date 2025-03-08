<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\genrecontroler;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\IsAdmin;

Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/register', [FormController::class, 'daftar']);
Route::post('/welcome', [FormController::class, 'welcome']);
Route::get('/master', function () {
    return view('layouts.master');
});

//genre 
Route::middleware([IsAdmin::class])->group(function () {
    //crete
Route::get('/genre/create', [genrecontroler::class, 'create']);
Route::post('/genre', [genrecontroler::class, 'store']);

    //update
Route::get('/genre/{id}/edit', [genrecontroler::class, 'edit']);
Route::put('/genre/{id}', [genrecontroler::class, 'update']);

    //delete
Route::delete('/genre/{id}', [genrecontroler::class, 'destroy']);

Route::get('/home', function () {
    return view('dashboard');
});
});

//read
Route::get('/genre', [genrecontroler::class, 'index']);
Route::get('/genre/{id}', [genrecontroler::class, 'show']);

//CRUD Buku
Route::resource('buku', bukucontroller::class);

//Auth
//register
Route::get('/register', [AuthController::class, 'tampilregister']);
Route::post('/register', [AuthController::class, 'registeruser']);

//login
Route::get('/login', [AuthController::class, 'tampillogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/profil', [AuthController::class, 'getprofil'])->middleware('auth');
Route::post('/profil', [AuthController::class, 'createProfil'])->middleware('auth');
Route::PUT('/profil/{id}', [AuthController::class, 'updateProfil'])->middleware('auth');
Route::post('/komen/{bukus_id}',[KomenController::class,'owner'])->middleware('auth');
?>

