<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});


Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Ilham Deedat Al-Ayyubi",
        "nohp" => "0882003309574",
        "foto" => "img/deedat.jpg",
    ]);
});


Route::get('/berita',[BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa');

    Route::get('/tambahmahasiswa',[MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
    Route::POST('/insertdata',[MahasiswaController::class, 'insertdata'])->name('insertdata');

    Route::get('/tampildata/{id}',[MahasiswaController::class, 'tampildata'])->name('tampildata');

    Route::POST('/editdata/{id}',[MahasiswaController::class, 'editdata'])->name('editdata');

    Route::get('/deletedata/{id}',[MahasiswaController::class, 'deletedata'])->name('deletedata');
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});
