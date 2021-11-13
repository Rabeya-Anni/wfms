<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\contentcontroller;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\IteamController;
use App\Http\Controllers\Backend\customerController;
use App\Http\Controllers\Backend\OrderController;
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

//Route::get('/home', function () {
    //return view('admin.content');
//});
Route::get('/admin', [contentcontroller::class,'admin']);
Route::get('/package',[PackageController::class, 'package'])->name('package');
Route::get('/iteam',[Iteamcontroller::class, 'iteam'])->name('iteam');
Route::get('/customer',[CustomerController::class, 'customer'])->name('customer');
Route::get('/order',[OrderController::class, 'order'])->name('order');