<?php
//Admin
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\contentcontroller;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\PackageItemController;
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
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\DashboardController;


//Website
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShowPackageController;
use App\Http\Controllers\Frontend\ShowItemController;
use App\Http\Controllers\Frontend\GiveOrderController;
use App\Http\Controllers\Frontend\GiveRequestFormController;
use App\Http\Controllers\Frontend\GiveRequestController;
use App\Http\Controllers\Frontend\RegistrationformController;
use App\Http\Controllers\Frontend\EmployeeRegistrationController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\LocationController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\ViewRequestController;
use App\Http\Controllers\Frontend\ShowOrderDetailsController;
use App\Http\Controllers\Frontend\PaymentFromController;



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

//<---------website Part-------->//<---------website Part-------->//<---------website Part-------->
Route::get('/',[HomeController::class,'home'])->name('home');

//showpackage route
Route::get('/home/showpackage',[ShowPackageController::class,'showpackage'])->name('showpackage');
Route::get('/home/packagedetails/{id}',[ShowPackageController::class,'packagedetails'])->name('package.details');


//showitem route
Route::get('/home/showitem',[ShowItemController::class,'showitem'])->name('showitem');


//Give order route
Route::get('/home/giveorder',[GiveOrderController::class,'giveorder'])->name('giveorder');
// Route::post('/home/giveorder/store',[GiveOrderController::class,'giveorderstore'])->name('giveorder.store');


//show Order details route
Route::get('/home/showorderdetails',[ShowOrderDetailsController::class,'showorderdetails'])->name('showorderdetails');


//payment form route
Route::get('/home/paymentform/',[PaymentFromController::class,'paymentform'])->name('paymentform');
Route::post('/home/paymentform/store/',[PaymentFromController::class,'paymentformstore'])->name('paymentform.store');


//Give request route
Route::get('/home/giverequestform',[GiveRequestFormController::class,'giverequestform'])->name('giverequestform');
Route::post('/home/giverequestform/store',[GiveRequestFormController::class,'giverequestformstore'])->name('giverequestform.store');


//Give request route//--->Add organization//
Route::get('/home/giverequest',[GiveRequestController::class,'giverequest'])->name('giverequest');
Route::post('/home/giverequest/store',[GiveRequestController::class,'giverequeststore'])->name('giverequest.store');


//User profile route
Route::get('/home/userprofile',[ UserProfileController::class,'userprofile'])->name('userprofile');
Route::put('/home/userprofile/update/{id}',[ UserProfileController::class,'userprofileupdate'])->name('userprofile.update');

//view request route
Route::post('/home/viewrequest',[ViewRequestController::class,'viewrequest'])->name('viewrequest');


//Registration route
Route::get('/home/registrationform',[RegistrationformController::class,'registrationform'])->name('registrationform');
Route::post('/home/registration/store',[RegistrationformController::class,'registrationstore'])->name('registration.store');

//Employee Registration route
Route::get('/home/employeeregistrationform',[EmployeeRegistrationController::class,'employeeregistrationform'])->name('employeeregistrationform');
Route::post('/home/employeeregistration/store',[EmployeeRegistrationController::class,'employeeregistrationstore'])->name('employeeregistration.store');


//Loginform route
Route::get('/home/loginform',[RegistrationformController::class,'loginform'])->name('loginform');
Route::post('/home/loginform/store',[RegistrationformController::class,'loginformstore'])->name('loginform.store');


// Logout route
Route::get('/home/logoutform',[RegistrationformController::class,'logout'])->name('logoutform');


// About Us route
Route::get('/home/about',[AboutController::class,'about'])->name('about');


// Location route
Route::get('/home/location',[LocationController::class,'location'])->name('location');


// Contact route
Route::get('/home/contact',[ContactController::class,'contact'])->name('contact');


// Gallery route
Route::get('/home/gallery',[GalleryController::class,'gallery'])->name('gallery');

//web Auth route group
Route::group(['middleware'=>'web_auth'],function (){

//Cart route   
Route::get('/home/addtocart/{id}',[OrderController::class,'addtocart'])->name('cart.add');
Route::get('/get-cart',[OrderController::class,'getCart'])->name('cart.get');
Route::get('/clear-cart',[OrderController::class,'clearCart'])->name('cart.clear');
});


//Route::get('/home', function () {
    //return view('admin.content');
//});





//<--------Admin Part-------->//<--------Admin Part-------->//<--------Admin Part-------->

// Route::group(['prefix'=>'admin'],function(){
    
//admin-login part

Route::get('/adminlogin',[AdminLoginController::class, 'adminlogin'])->name('admin.login');
Route::post('/admin/dologin',[AdminLoginController::class, 'dologin'])->name('admin.dologin');


//Admin Auth route group
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    Route::get('/',[contentcontroller::class,'admin'])->name('admin');

    //     return view('admin.layout.content');
    // })->name('admin');

Route::get('/adminlogout',[AdminLoginController::class, 'adminlogout'])->name('admin.logout');


//contend route
Route::get('/admin', [contentcontroller::class,'admin'])->name('admin');


//package route
Route::get('/package',[PackageController::class, 'package'])->name('package');
Route::get('/package-form',[PackageController::class, 'packageform'])->name('packageform');
Route::post('/package/store',[PackageController::class, 'packagestore'])->name('package.store');
Route::get('/package/view/{id}',[PackageController::class, 'packageview'])->name('package.view');
Route::get('/package/edit/{id}',[PackageController::class, 'packageedit'])->name('package.edit');
Route::put('/package/update/{id}',[PackageController::class, 'packageupdate'])->name('package.update');
Route::get('/package/delete/{id}',[PackageController::class, 'packagedelete'])->name('package.delete');


//package-item route
Route::get('/packageitem',[PackageItemController::class, 'packageitem'])->name('package.item');


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
Route::get('/orderdetails/{order_id}',[OrderController::class, 'orderdetails'])->name('orderdetails');
Route::get('/order/confirm/{id}',[OrderController::class, 'orderconfirm'])->name('orderdetails.confirm');
Route::get('/order/cancel/{id}',[OrderController::class, 'ordercancel'])->name('order.cancel');
Route::get('/order/delete/{id}',[OrderController::class, 'orderdelete'])->name('order.delete');



//payment route
Route::get('/payment',[PaymentController::class, 'payment'])->name('payment');
Route::post('/payment/store',[PaymentController::class, 'paymentstore'])->name('payment.store');
Route::get('/payment/view/{id}',[PaymentController::class, 'paymentview'])->name('payment.view');
Route::get('/payment/delete/{id}',[PaymentController::class, 'paymentdelete'])->name('payment.delete');



//food request route
Route::get('/request',[RequestController::class, 'request'])->name('request');
Route::post('/request/store',[RequestController::class, 'requeststore'])->name('request.store');
Route::get('/request/status/approve/{id}',[RequestController::class, 'statusapprove'])->name('status.approve');
Route::get('/request/status/cancel/{id}',[RequestController::class, 'statuscancel'])->name('status.cancel');
Route::get('/request/delete/{id}',[RequestController::class, 'requestdelete'])->name('request.delete');



//organization route
Route::get('/organization',[OrganizationController::class, 'organization'])->name('organization');
Route::get('/organizationform',[OrganizationController::class, 'organizationform'])->name('organizationform');
Route::post('/organization/store',[OrganizationController::class, 'organizationstore'])->name('organization.store');
Route::get('/organization/view/{id}',[OrganizationController::class, 'organizationview'])->name('organization.view');
Route::get('/organization/edit/{id}',[OrganizationController::class, 'organizationedit'])->name('organization.edit');
Route::put('/organization/update/{id}',[OrganizationController::class, 'organizationupdate'])->name('organization.update');
Route::get('/organization/delete/{id}',[OrganizationController::class, 'organizationdelete'])->name('organization.delete');



//distribution route
Route::get('/distribution',[DistributionController::class, 'distribution'])->name('distribution');
Route::get('/distributionform',[DistributionController::class, 'distributionform'])->name('distributionform');
Route::post('/distribution/store',[DistributionController::class, 'distributionstore'])->name('distribution.store');
Route::get('/distribution/view/{id}',[DistributionController::class, 'distributionview'])->name('distribution.view');
Route::get('/distribution/edit/{id}',[DistributionController::class, 'distributionedit'])->name('distribution.edit');
Route::put('/distribution/update/{id}',[DistributionController::class, 'distributionupdate'])->name('distribution.update');
Route::get('/distribution/delete/{id}',[DistributionController::class, 'distributiondelete'])->name('distribution.delete');



//report route
Route::get('/report',[ReportController::class, 'report'])->name('report');



});





