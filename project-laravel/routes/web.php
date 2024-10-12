<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\CategoryController;

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

/* CRUD CATEGORY */

// === Create Category ===
// menampilkan form untuk membuat data Category baru
Route::get('/category/create', [CategoryController::class, 'create']);

// menyimpan data baru ke tabel Category
Route::post('/category', [CategoryController::class, 'store']);


// === Read Category ===
// menampilkan list data Category
Route::get('/category', [CategoryController::class, 'index']);

// menampilkan detail data category dengan id tertentu
Route::get('/category/{id}', [CategoryController::class, 'show']);


// === Update Category ===
// menampilkan form untuk edit category dengan id tertentu
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);

// menyimpan perubahan data category (update) untuk id tertentu
Route::put('/category/{id}', [CategoryController::class, 'update']);


// === Delete Category ===
// menghapus data category dengan id tertentu
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
