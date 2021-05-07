<?php

use App\Http\Controllers\HomeController;
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
    return view('home');
});

Route::get('/mobile', [HomeController::class, 'mobile']);
Route::get('/mobile/detail', [HomeController::class, 'detail']);

Route::get('/personel', function () {
    return view('personel');
})->name('personel');






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes(['register' => false]);

Route::get('/home', function (){
    return \Illuminate\Support\Facades\Redirect::route('voyager.dashboard');
})->name('home');
