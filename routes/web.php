<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\HomeController;
use App\Models\Bilet;
use App\Models\Seans;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', [CinemaController::class, 'home']);

Route::post('/adim-1', function (Request $request) {#Saat seçimi
  return CinemaController::stepper($request,true);
})->name('bilet-al-adim-1');

Route::post('/adim-2', function (Request $request) {#salon
    return CinemaController::stepper($request,true,true);
})->name('bilet-al-adim-2');

Route::post('/adim-3', function (Request $request) {#koltuk
    return CinemaController::stepper($request,true,true,true);
})->name('bilet-al-adim-3');


Route::post('/adim-4', function (Request $request) {#koltuk
    return CinemaController::stepper($request,true,true,true, true);
})->name('bilet-al-adim-4');


Route::post('/satin-alindi', [CinemaController::class, 'purchase'])->name('satin-alma');

Route::get('bilet-detayi/{biletNo}',[CinemaController::class,'ticketDetail'])->name('bilet-detayi');

Route::get('/mobile', [CinemaController::class,
    'mobile',
])
    ->name('mobile-home');
Route::get('/mobile/buy', [
    CinemaController::class,
    'mobileBuy',
])
    ->name('mobile-buy');
Route::get('/mobile/buy/{filmId}', [
    CinemaController::class,
    'mobileBuyFilm',
])
    ->name('mobile-buy-film');
Route::get('/mobile/{filmId}', [
    CinemaController::class,
    'detail',
])
    ->name('mobile-detail');

Route::get('/personel', function () {
    return view('personel');
})
    ->name('personel');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes(['register' => false]);

Route::get('/home', function () {
    return Redirect::route('voyager.dashboard');
})
    ->name('home');
