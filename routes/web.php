<?php
//Admin
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

//Website
//use App\Http\Controllers\Frontend\ContentController;
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

//Route::get(url:'/home', function () {
    //return view('website.master');
//});
Route::get('/admin', [contentcontroller::class,'admin'])->name('admin');

//package route
Route::get('/package',[PackageController::class, 'package'])->name('package');
Route::get('/packageform',[PackageController::class, 'packageform'])->name('packageform');
Route::post('/store',[PackageController::class, 'store'])->name('store');


//item route
Route::get('/item',[ItemController::class, 'item'])->name('item');
Route::get('/itemform',[ItemController::class, 'itemform'])->name('itemform');
Route::post('/store',[ItemController::class, 'store'])->name('store');


//customer route
Route::get('/customer',[CustomerController::class, 'customer'])->name('customer');

//order route
Route::get('/order',[OrderController::class, 'order'])->name('order');


//payment route
Route::get('/payment',[PaymentController::class, 'payment'])->name('payment');


//request route
Route::get('/request',[RequestController::class, 'request'])->name('request');


//organization route
Route::get('/organization',[OrganizationController::class, 'organization'])->name('organization');


//distribution route
Route::get('/distribution',[DistributionController::class, 'distribution'])->name('distribution');



//website Part
//Route::get('/home', [ContentController::class,'home'])->name('home');





