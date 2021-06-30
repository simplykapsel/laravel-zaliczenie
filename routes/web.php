<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
//Stary index
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('start');
});

Route::get('/oferta', function () {
    return view('oferta');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/o_nas', function () {
    return view('o_nas');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin', [AdminController::class, "index"])->name('admin');
});

Route::group(['middleware' => ['user']], function () {
    Route::get('user', [UserController::class, "index"])->name('user');
});

Route::get('/createUser', function () {
    return view('users.createUser');
});

Route::get('/createCar', function () {
    return view('cars.createCar');
});

Route::get('/editCar', function () {
    return view('cars.editCar');
});

Route::get('/editUser', function () {
    return view('users.editUser');
});

Route::post('/createUser', [App\Http\Controllers\UserController::class, 'createUser'])->name('createUser');
Route::put('/editUser', [App\Http\Controllers\UserController::class, 'editUser'])->name('editUser');

Route::post('/createCar', [App\Http\Controllers\CarController::class, 'createCar'])->name('createCar');





