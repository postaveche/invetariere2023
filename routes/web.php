<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TipController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\MfController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/home/tip', TipController::class);
Route::resource('/home/sectii', SectionController::class);
Route::resource('/home/personal', PersonalController::class);
Route::resource('/home/mf', MfController::class);

