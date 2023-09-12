<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

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
//login routes
Route::get('/',[AuthController::class,'logininterface'])->name('login');
Route::get('/employee',[mainController::class,'employee'])->name('employee');


Route::post('/newuser',[AuthController::class,'newuser'])->name('welcome');
Route::post('/login',[AuthController::class,'UserLogin'])->name('userlogin');

//registration routes
// Route::post('/register',[AuthController::class,'RegisterUser'])->name('register');
// Route::get('/register',[AuthController::class,'registration'])->name('register');

