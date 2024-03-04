<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DocterController;
use App\Http\Controllers\Aucadmin\AdminController;
use Illuminate\Pagination\Paginator;
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


// مسیر ورود به سفارشات
Route::get('/order',[OrderController::class,'create'])->name('orders');
// مسیر ثبت سفارش
Route::post('/order/submit_order',[OrderController::class,'store'])->name('submit_order');
// مسیر دیدن پزشکان
Route::get('/showdocters',[DocterController::class,'index'])->name('index.docters');



// مسیر ثبت نام
Route::post('/Admin_rig', [AdminController::class,'rigester'])->name('rigester');
// مسیر ورود به بخش مدیریت
Route::post('/Admin', [AdminController::class,'login'])->name('submit')->middleware('auth.access.admin');

// مسیر تغییر دادن صفحه مدیریت
Route::get('/Admin', [AdminController::class,'index'])->name('admin-index')->middleware('auth');










