<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard',[GaleriController::class, 'index'])->name('dashboard');

Route::get('/tambahgaleri',[GaleriController::class, 'tambahgaleri'])->name('tambahgaleri');
Route::post('/insertdata',[GaleriController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[GaleriController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[GaleriController::class, 'updatedata'])->name('updatedata');

Route::get('/hapusdata/{id}',[GaleriController::class, 'hapusdata'])->name('hapusdata');

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/', function () {
    return view('landingpage');
});
