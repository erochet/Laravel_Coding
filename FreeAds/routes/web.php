<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsControllers;
use App\Http\Controllers\userControllers;

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

Route::resource('Ads','App\Http\Controllers\AdController');
Route::resource('users','App\Http\Controllers\userController');