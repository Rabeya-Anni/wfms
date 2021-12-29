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
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\AdminLoginController;

//Website
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShowPackageController;
use App\Http\Controllers\Frontend\ShowItemController;
use App\Http\Controllers\Frontend\GiveOrderController;
use App\Http\Controllers\Frontend\RegistrationformController;
use App\Http\Controllers\Frontend\LocationController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;


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

//<---------website Part-------->//<---------website Part-------->
Route::get('/',[HomeController::class,'home'])->name('home');

//showpackage route
Route::get('/home/showpackage',[ShowPackageController::class,'showpackage'])->name('showpackage');

//showitem route
Route::get('/home/showitem',[ShowItemController::class,'showitem'])->name('showitem');

//Give order route
Route::get('/home/giveorder',[GiveOrderController::class,'giveorder'])->name('giveorder');
Route::post('/home/giveorder/store',[GiveOrderController::class,'giveorderstore'])->name('giveorder.store');


//Registration route
Route::get('/home/registrationform',[RegistrationformController::class,'registrationform'])->name('registrationform');
Route::post('/home/registration/store',[RegistrationformController::class,'registrationstore'])->name('registration.store');


//Loginform route
Route::get('/home/loginform',[RegistrationformController::class,'loginform'])->name('loginform');
Route::post('/home/loginform/store',[RegistrationformController::class,'loginformstore'])->name('loginform.store');

// Logout route
Route::get('/home/logoutform',[RegistrationformController::class,'logout'])->name('logoutform');

// Location
Route::get('/home/location',[LocationController::class,'location'])->name('location');

// Contact
Route::get('/home/contact',[ContactController::class,'contact'])->name('contact');


// Gallery
Route::get('/home/gallery',[GalleryController::class,'gallery'])->name('gallery');


//Route::get('/home', function () {
    //return view('admin.content');
//});





//<--------Admin Part-------->//<--------Admin Part-------->

Route::group(['prefix'=>'admin'],function(){
    
//admin-login part

Route::get('/adminlogin',[AdminLoginController::class, 'adminlogin'])->name('admin.login');
Route::post('/admin/dologin',[AdminLoginController::class, 'dologin'])->name('admin.dologin');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/',function(){
        return view('admin.layout.content');
    })->name('admin');

Route::get('/adminlogout',[AdminLoginController::class, 'adminlogout'])->name('admin.logout');


Route::get('/admin', [contentcontroller::class,'admin'])->name('admin');


//package route
Route::get('/package',[PackageController::class, 'package'])->name('package');
Route::get('/package-form',[PackageController::class, 'packageform'])->name('packageform');
Route::post('/package/store',[PackageController::class, 'packagestore'])->name('package.store');
Route::get('/package/view/{id}',[PackageController::class, 'packageview'])->name('package.view');
Route::get('/package/edit/{id}',[PackageController::class, 'packageedit'])->name('package.edit');
Route::put('/package/update/{id}',[PackageController::class, 'packageupdate'])->name('package.update');
Route::get('/package/delete/{id}',[PackageController::class, 'packagedelete'])->name('package.delete');


//item route
Route::get('/item',[ItemController::class, 'item'])->name('item');
Route::get('/item-form',[ItemController::class, 'itemform'])->name('itemform');
Route::post('/item/store',[ItemController::class, 'store'])->name('item.store');
Route::get('/item/view/{id}',[ItemController::class, 'itemview'])->name('item.view');
Route::get('/item/edit/{id}',[ItemController::class, 'itemedit'])->name('item.edit');
Route::put('/item/update/{id}',[ItemController::class, 'itemupdate'])->name('item.update');
Route::get('/item/delete/{id}',[ItemController::class, 'itemdelete'])->name('item.delete');


//customer route
Route::get('/customer',[CustomerController::class, 'customer'])->name('customer');
Route::post('/customer',[CustomerController::class, 'customerstore'])->name('customer.store');
Route::get('/customer/view/{id}',[CustomerController::class, 'customerview'])->name('customer.view');
Route::get('/customer/delete/{id}',[CustomerController::class, 'customerdelete'])->name('customer.delete');



//employee route
Route::get('/employee',[EmployeeController::class, 'employee'])->name('employee');
Route::get('/employeeform',[EmployeeController::class, 'employeeform'])->name('employeeform');
Route::post('/employee/store',[EmployeeController::class, 'employeestore'])->name('employee.store');
Route::get('/employee/view/{id}',[EmployeeController::class, 'employeeview'])->name('employee.view');
Route::get('/employee/edit/{id}',[EmployeeController::class, 'employeeedit'])->name('employee.edit');
Route::put('/employee/update/{id}',[EmployeeController::class, 'employeeupdate'])->name('employee.update');
Route::get('/employee/delete/{id}',[EmployeeController::class, 'employeedelete'])->name('employee.delete');



//order route
Route::get('/order',[OrderController::class, 'order'])->name('order');
Route::post('/order/store',[OrderController::class, 'orderstore'])->name('order.store');


//payment route
Route::get('/payment',[PaymentController::class, 'payment'])->name('payment');


//request route
Route::get('/request',[RequestController::class, 'request'])->name('request');


//organization route
Route::get('/organization',[OrganizationController::class, 'organization'])->name('organization');
Route::get('/organizationform',[OrganizationController::class, 'organizationform'])->name('organizationform');
Route::post('/organization/store',[OrganizationController::class, 'organizationstore'])->name('organization.store');


//distribution route
Route::get('/distribution',[DistributionController::class, 'distribution'])->name('distribution');
Route::get('/distributionform',[DistributionController::class, 'distributionform'])->name('distributionform');
Route::post('/distribution/store',[DistributionController::class, 'distributionstore'])->name('distribution.store');



});
});




