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
Route::get('/brewery/show/{brewery}', [BreweryController::class, 'show'])->name('brewery.show');

Route::post('/brewery/beers/{brewery}', [BreweryController::class, 'beers'])->name('brewery.beers');
Route::get('/brewery/edit/{brewery}',[BreweryController::class, 'edit'])->name('brewery.edit');
Route::post('/brewery/update/{brewery}',[BreweryController::class, 'update'])->name('brewery.update');

Route::delete('/brewery/destroy/{brewery}', [BreweryController::class, 'destroy'])->name('brewery.destroy');

Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [PublicController::class, 'submit'])->name('contact.submit');
