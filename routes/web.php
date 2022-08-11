<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrolleeController;
use App\Http\Controllers\RegistrationController;

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

//enrollee registration page
Route::get('/enrollee/create', [RegistrationController::class, 'create'])->name('enrollee.create');
Route::post('/enrollee', [RegistrationController::class, 'store'])->name('enrollee.store');

//first initialization for db
Route::get('/initialize', [EnrolleeController::class, 'initialize']);
