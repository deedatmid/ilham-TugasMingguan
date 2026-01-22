<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $mahasiswas = Mahasiswa::orderBy('created_at','desc')->get();
    return view('home', [
        "title" => "home",
        'mahasiswas' => $mahasiswas,
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
Route::get('/register', [LoginController::class, 'showRegister'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth.login')->group(function () {
    Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa');

    // users list (requires auth)
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users/{id}/impersonate', [UserController::class, 'impersonate'])->name('users.impersonate');

    Route::get('/tambahmahasiswa',[MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
    Route::POST('/insertdata',[MahasiswaController::class, 'insertdata'])->name('insertdata');

    Route::get('/tampildata/{id}',[MahasiswaController::class, 'tampildata'])->name('tampildata');

    Route::POST('/editdata/{id}',[MahasiswaController::class, 'editdata'])->name('editdata');

    Route::get('/deletedata/{id}',[MahasiswaController::class, 'deletedata'])->name('deletedata');
});

// public users list (non-admins) - accessible without auth
Route::get('/daftar-akun', [UserController::class, 'publicIndex'])->name('users.public');

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});
