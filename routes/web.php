<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\PengumumanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/berita', function () {
    return view('berita');
});


Route::get('/pengunguman', function () {
    return view('pengunguman');
});

Route::get('/galery', function () {
    return view('galery');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/a_profile', function () {
    return view('a_views.a_profile');
});


Route::get('/a_berita', function () {
    return view('a_views.a_berita');
});


Route::get('/a_pengunguman', function () {
    return view('a_views.a_pengunguman');
});

Route::get('/a_galery', function () {
    return view('a_views.a_galery');
});

Route::get('/a_contact', function () {
    return view('a_views.a_contact');
});

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('berita', BeritaController::class);
});

Route::resource('pengumuman', PengumumanController::class);


Route::resource('admin/berita', BeritaController::class);
// routes/web.php

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::resource('berita', 'Admin\BeritaController');
});
// routes/web.php
Route::get('/admin', [AdminController::class, 'index']);
