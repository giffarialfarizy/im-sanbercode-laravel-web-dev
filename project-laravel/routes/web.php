<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TableController;

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

Route::get('/', [DashboardController::class, 'viewHome']);

Route::get('/register', [AuthController::class, 'viewRegister']);

Route::post('/welcome', [AuthController::class, 'viewWelcome']);

Route::get('/table', [TableController::class, 'viewTable']);

Route::get('/data-table', [TableController::class, 'viewDataTable']);
