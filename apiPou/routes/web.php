<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PouController;

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

Route::get('/add/diseased',[PouController::class, 'diseased'])->name('addDiseased');
Route::get('/add/bathroom',[PouController::class, 'bathroom'])->name('addBathroom');
Route::get('/add/food',[PouController::class, 'food'])->name('addFood');
Route::get('/show/all',[PouController::class, 'showAll'])->name('showAll');
