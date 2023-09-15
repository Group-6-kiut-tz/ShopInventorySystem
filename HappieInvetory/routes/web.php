<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\ProductController;
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
//registration routes
// Route::post('/register',[AuthController::class,'RegisterUser'])->name('register');
// Route::get('/register',[AuthController::class,'registration'])->name('register');


//login routes
Route::get('/',[AuthController::class,'logininterface'])->name('login');
Route::get('/employee',[mainController::class,'employee'])->name('employee');


Route::post('/newuser',[AuthController::class,'newuser'])->name('welcome');
Route::post('/login',[AuthController::class,'UserLogin'])->name('userlogin');


//product routes 
Route::get('/viewProduct',[ProductController::class,'productView'])->name('viewProduct');
Route::post('/addProduct',[ProductController::class,'productForm'])->name('addProduct');
Route::get('/productList',[ProductController::class,'productFetch'])->name('productList');
Route::get('/editProduct/{id}',[ProductController::class,'edit'])->name('editProduct');
Route::put('/updateProduct/{id}', [ProductController::class, 'update'])->name('updateProduct');
Route::delete('/deleteProduct/{id}', [ProductController::class, 'destroyProduct'])->name('deleteProduct');


//sales Routes
Route::get('/viewSales',[ProductController::class,'SalesView'])->name('viewSales');
Route::post('/addSales',[ProductController::class,'SalesForm'])->name('addSales');
Route::get('/salesList',[ProductController::class,'SalesFetch'])->name('salesList');
Route::get('/editSales/{id}',[ProductController::class,'salesEdit'])->name('editSales');
Route::put('/updateSales/{id}', [ProductController::class, 'SalesUpdate'])->name('update');
Route::delete('/deleteSales/{id}', [ProductController::class, 'destroySales'])->name('deleteSales');


//routes for profiy




