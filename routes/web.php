<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\contentcontroller;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\RequestController;
use App\Http\Controllers\Backend\OrganizationController;
use App\Http\Controllers\Backend\DistributionController;
use App\Http\Controllers\Backend\AddnewpackageController;


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
Route::get('/admin', [contentcontroller::class,'admin'])->name('admin');
Route::get('/package',[PackageController::class, 'package'])->name('package');
Route::get('/item',[ItemController::class, 'item'])->name('item');
Route::get('/customer',[CustomerController::class, 'customer'])->name('customer');

//order route
Route::get('/order',[OrderController::class, 'order'])->name('order');


//payment route
Route::get('/payment',[PaymentController::class, 'payment'])->name('payment');


//request route
Route::get('/request',[RequestController::class, 'request'])->name('request');


//organization
Route::get('/organization',[OrganizationController::class, 'organization'])->name('organization');


//distribution route
Route::get('/distribution',[DistributionController::class, 'distribution'])->name('distribution');

//package route
Route::get('/package',[PackageController::class, 'package'])->name('package');
Route::get('/addnewpackage',[AddnewpackageController::class, 'addnewpackage'])->name('addnewpackage');
Route::post('/addnewpackage/store',[AddnewpackageController::class, 'store'])->name('store');

//item route
Route::get('/item/list',[ItemController::class,'index'])->name('item.list');
Route::get('/item/create',[ItemController::class,'create'])->name('item.create');
Route::post('/item/store',[ItemController::class,'store'])->name('item.store');

//customer route
Route::get('/customer',[CustomerController::class, 'customer'])->name('customer');
Route::get('/customer/list',[CustomerController::class, 'customer'])->name('customer.list');

