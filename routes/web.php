<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

// Route::get();
// Route::post();
// Route::put ();
// Route::patch();
// Route::delete();
// Route::options();

//common routes naming
// index - show all data
// show - show a single data
// create - show a form to a add new data
// store - store a data
// edit - show a form to edita data
// update - update a data
// destroy - delete a data

Route::get('/',  [StudentController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class,'register']);
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class,'process']);
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/store', [UserController::class, 'store']);
Route::get('/add/student', [StudentController::class, 'create']);