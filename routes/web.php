<?php

use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;

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

//Routingi odpowiedzialne za wyświetlanie nowo dodanych aut
Route::get('/', [App\Http\Controllers\StartPageController::class, 'index'])->name('start');
Route::post('/',[App\Http\Controllers\StartPageController::class, 'update'])->name('startPost');


Route::get('/oferta', [App\Http\Controllers\OfertyController::class, 'index'])->name('oferta');

//Routingi odpowiedzialne za wyświetlanie stron
Route::get('/faq', function () {
    return view('faq');
});

Route::get('/o_nas', function () {
    return view('o_nas');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

//Routingi odpowiedzialne za aktualizacje profilu
Route::post('/editProfile', [App\Http\Controllers\EditProfileController::class, 'update'])->name('editProfileUpdate');
Route::get('/editProfile', [App\Http\Controllers\EditProfileController::class, 'index'])->name('editProfile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Routingi pod dashboard userów i adminów
Route::group(['middleware' => ['admin']], function () {
    Route::get('admin', [AdminController::class, "index"])->name('admin');
    Route::resource('cars', CarController::class);
    Route::resource('users', UserController::class);
    Route::post('/admin', [App\Http\Controllers\returnCarController::class, 'update'])->name('returnCar');
});

Route::group(['middleware' => ['user']], function () {
    Route::get('user', [DefaultController::class, "index"])->name('user');
    Route::post('/user', [App\Http\Controllers\returnCarController::class, 'update'])->name('returnCar');
});







