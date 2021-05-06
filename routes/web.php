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
    return view('atayaz');
});

Route::get('/atayaz', function () {
    return view('welcome');
});

Route::get('/login-page', function () {
    return view('auth.login');
})->name('loginPage');

Route::get('/personel', function () {
    return view('personel');
})->name('personel');

Route::get('/musteri', function () {
    return view('musteri');
})->name('musteri');








Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
