<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('navbar');
});

Route::get('/home', function () {
    return view('welcome');
});

// Route::get('/katalog', function () {
//     return view('katalog');
// });

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::resource('e_books', 'App\Http\Controllers\bookController');

Route::get('/book', function () {
    return view('eBook.index');
});