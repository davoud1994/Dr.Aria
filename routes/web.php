<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DocterController;
use App\Http\Controllers\Aucadmin\LoginController;
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

Route::get('/home',[HomeController::class,'Show'])->name('home');
// Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/order',[OrderController::class,'create'])->name('orders');
Route::post('/order/submit_order',[OrderController::class,'store'])->name('submit_order');
Route::get('/showdocters',[DocterController::class,'index'])->name('index.docters');



Route::post('/login/', [LoginController::class,'login'])->name('submit');


Route::get('/Admin_page',[LoginController::class,'index_members'])->name('admin_page');

