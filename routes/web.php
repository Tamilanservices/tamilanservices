<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessInfoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/home', [BusinessInfoController::class, 'index'])->name('home');

Route::get('/listing', [BusinessInfoController::class, 'listing']);
Route::get('/add-business', [BusinessInfoController::class, 'addInfo']);
Route::post('/store-business', [BusinessInfoController::class, 'store']);
Route::get('/details/{id}', [BusinessInfoController::class, 'details']);