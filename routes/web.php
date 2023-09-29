<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TipController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\MfController;
use App\Http\Controllers\OmvsdController;
use App\Http\Controllers\ListController;


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
Route::resource('/home/omvsd', OmvsdController::class);
Route::get('/home/list/omvsd', [ListController::class, 'omvsd_neatribuite'])->name('omvsd_neatribuite');
Route::get('/home/list/mf', [ListController::class, 'mf_neatribuite'])->name('mf_neatribuite');
Route::get('/home/list/sectii', [ListController::class, 'sectii'])->name('sectii');
Route::get('/home/list/sectii/{id}', [ListController::class, 'sectii_info'])->name('sectii_info');


