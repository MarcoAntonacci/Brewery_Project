<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BreweryController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/brewery/create', [BreweryController::class, 'create'])->name('brewery.create');
Route::post('/brewery/store', [BreweryController::class, 'store'])->name('brewery.store');
Route::get('/brewery/index', [BreweryController::class, 'index'])->name('brewery.index');
