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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::get('/annonces', 'Adscontroller@create')->name('ad.create');

use App\Http\Controllers\AdsController;
Route::get('/annonce', [AdsController::class, 'index'])->name('annonce');


/*Route::get('/annonce', function () {
    return view('create');
})->name('ad.create');