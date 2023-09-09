<?php

use App\Http\Controllers\UserController;
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


Route::get('/', function(){
    return 'welcome!';
});

Route::get('/users',[UserController::class, 'index'])->name('login');

Route::get('/users/{id}', [UserController::class, 'show']);