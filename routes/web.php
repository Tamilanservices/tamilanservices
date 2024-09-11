<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessInfoController;

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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/listing', function () {
    return view('pages.listing');
});
Route::get('/details', function () {
    return view('pages.details');
});

Route::post('business-info', [BusinessInfoController::class, 'addInfo']);

