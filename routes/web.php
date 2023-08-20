<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\backend\DoctorController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\ProduetsController;
use App\Http\Controllers\backend\FCustomerController;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\backend\BeauticianController;
use App\Http\Controllers\backend\AppointmentController;
use App\Http\Controllers\backend\DAppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!`
|
*/

#Frontend

// Route::get('/',[HomepageController::class,'home'])->name('homepage');
Route::get('/',[HomepageController::class,'home'])->name('homepage');


#frontend loging
Route::get('/hlogin',[HomepageController::class,'hlogin'])->name('hlogin');
Route::post('/hlogin-submit',[HomepageController::class,'hlogin_submit'])->name('hlogin.submit');

//customer registration 
Route::get('/hregister',[HomepageController::class,'hregister'])->name('hregister');
Route::post('/hregister-submit',[HomepageController::class,'hregister_submit'])->name('hregister.submit');



Route::group(['middleware'=>'auth'],function(){
    #Frontent appointment
    Route::get('/appointment-fform',[AppointmentController::class,'fform'])->name('appointment.fform');
    Route::post('/store_form',[AppointmentController::class,'store_form'])->name('store.form');
    # dappointment
    Route::get('/dappointment-fform',[DAppointmentController::class,'dform'])->name('appointment.dform');
    Route::post('/store_dform',[DAppointmentController::class,'store_dform'])->name('store.dform');
    Route::get('/customer-logout',[HomepageController::class,'logout'])->name('customer.logout');
});


                       //register
Route::get('/register',[authController::class,'register'])->name('register');
Route::post('/register-submit',[authController::class,'register_submit'])->name('register.submit');


                          //login
Route::get('/login',[authController::class,'login'])->name('login');
Route::post('/login-submit',[authController::class,'login_submit'])->name('login.submit');


#Home page
Route::get('/home-page',[HomepageController::class,'page'])->name('home.page');




Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){




Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');

//logout
Route::get('/logout',[authController::class,'logout'])->name('logout');

#Category backend
Route::get('/category-table',[CategoryController::class,'cat'])->name('category.table');
Route::get('/category-create',[CategoryController::class,'form'])->name('category.create');
Route::post('/categorycategory-store',[CategoryController::class,'store'])->name('category.store');
Route::get('/-edit/{category_id}',[CategoryController::class,'Edit'])->name('category.edit');
Route::put('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category-delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('/category/view/{id}',[categoryController::class,'view'])->name('category.view');







#brand backend
Route::get('/brand-index',[BrandController::class,'index'])->name('brand.index');
Route::get('/brand-create',[BrandController::class,'create'])->name('brand.create');
Route::post('/brand-store',[BrandController::class,'store'])->name('brand.store');
Route::get('/brand-edit/{brand_id}',[BrandController::class,'Edit'])->name('brand.edit');
Route::put('/brand-update/{id}',[BrandController::class,'update'])->name('brand.update');
Route::get('/brand-delete/{id}',[BrandController::class,'delete'])->name('brand.delete');
Route::get('/brand/view/{id}',[BrandController::class,'view'])->name('brand.view');



/* 

#produets backend
Route::get('/produets-index',[ProduetsController::class,'index'])->name('produets.index');
Route::get('/produets-create',[produetsController::class,'create'])->name('produets.create');
Route::post('/produets-store',[produetsController::class,'store'])->name('produets.store');
 */



#customer backend
Route::get('/customer-table',[CustomerController::class,'table'])->name('customer.table');
Route::get('/customer-form',[CustomerController::class,'form'])->name('customer.form');
Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');
Route::get('/customer-edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::put('/customer-update/{id}',[CustomerController::class,'update'])->name('customer.update');
Route::get('/customer-delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/view/{id}',[CustomerController::class,'view'])->name('customer.view');











#Beautician backend
Route::get('beautician/table',[BeauticianController::class,'table'])->name('beautician.table');
Route::get('/beautician-form',[BeauticianController::class,'form'])->name('beautician.form');
Route::post('/beautician-store',[BeauticianController::class,'store'])->name('beautician.store');
Route::get('/-edit/{beautician_id}',[BeauticianController::class,'Edit'])->name('beautician.edit');
Route::put('/beautician-update/{id}',[BeauticianController::class,'update'])->name('beautician.update');
Route::get('/beautician-delete/{id}',[BeauticianController::class,'delete'])->name('beautician.delete');




#Doctor backend
Route::get('doctor/table',[DoctorController::class,'table'])->name('doctor.table');
Route::get('/doctor-form',[DoctorController::class,'form'])->name('doctor.form');
Route::post('/doctor-store',[DoctorController::class,'store'])->name('doctor.store');




#Pyament backend
Route::get('payment/table',[PaymentController::class,'table'])->name('payment.table');
Route::get('/payment-form',[PaymentController::class,'form'])->name('payment.form');
Route::post('/pyament-store',[PaymentController::class,'store'])->name('payment.store');





#Service backend
Route::get('service/table',[ServiceController::class,'table'])->name('service.table');
Route::get('/service-form',[ServiceController::class,'form'])->name('service.form');
Route::post('/service-store',[ServiceController::class,'store'])->name('service.store');
Route::get('/-edit/{service_id}',[ServiceController::class,'Edit'])->name('service.edit');
Route::put('/service-update/{id}',[ServiceController::class,'update'])->name('service.update');
Route::get('/service-delete/{id}',[ServiceController::class,'delete'])->name('service.delete');




#Appointment backend
Route::get('appointment/table',[AppointmentController::class,'table'])->name('appointment.table');
Route::get('/appointment-form',[AppointmentController::class,'form'])->name('appointment.form');
Route::post('/appointment-store',[AppointmentController::class,'store'])->name('appointment.store');
Route::get('/-edit/{appointment_id}',[AppointmentController::class,'Edit'])->name('appointment.edit');
Route::put('/appointment-update/{id}',[AppointmentController::class,'update'])->name('appointment.update');
Route::get('/appointment-delete/{id}',[AppointmentController::class,'delete'])->name('appointment.delete');





Route::get('dappointment/table',[DAppointmentController::class,'table'])->name('dappointment.table');
Route::get('/dappointment-form',[DAppointmentController::class,'form'])->name('dappointment.form');
Route::post('/dappointment-store',[DAppointmentController::class,'store'])->name('dappointment.store');
Route::get('/-edit/{dappointment_id}',[DAppointmentController::class,'Edit'])->name('dappointment.edit');
Route::put('/dappointment-update/{id}',[DAppointmentController::class,'update'])->name('dappointment.update');
Route::get('/dappointment-delete/{id}',[DAppointmentController::class,'delete'])->name('dappointment.delete');
Route::get('/dappointment-prescription/{id}',[DAppointmentController::class,'prescription'])->name('dappointment.prescription');
Route::post('/prescription-store/{id}',[DAppointmentController::class,'pstore'])->name('prescription.store');

Route::get('/doctor-prescription/{id}',[DAppointmentController::class,'dprescription'])->name('doctor.prescription');
Route::post('/dprescription-store/{id}',[DAppointmentController::class,'dpstore'])->name('dprescription.store');


#report backent
Route::get('allreport',[ReportController::class,'all_report'])->name('all.report');



Route::get('/appointmentreport',[AppointmentController::class,'appointment_report'])->name('appointment.report');
Route::get('/appointmentreport/search',[AppointmentController::class, 'appointment_report_search'])->name('appointment_report_search');

Route::get('/dappointmentreport',[DAppointmentController::class,'dappointment_report'])->name('dappointment.report');
Route::get('/dappointmentreport/search',[DAppointmentController::class, 'dappointment_report_search'])->name('dappointment_report_search');


Route::get('/customerreport',[CustomerController::class,'customer_report'])->name('customer_report');
Route::get('/customerreport/search',[CustomerController::class, 'customer_report_search'])->name('customer_report_search');


Route::get('/paymenteport',[PaymentController::class,'payment_report'])->name('payment_report');
Route::get('/paymentreport/search',[PaymentController::class, 'payment_report_search'])->name('payment_report_search');






// Route::get('/profile',[AdminController::class,'profile'])->name('admin.profile');

});


