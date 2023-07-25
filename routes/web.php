<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\backend\DoctorController;
use App\Http\Controllers\backend\CustomerControlle;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProduetsController;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\backend\BeauticianController;
use App\Http\Controllers\backend\AppointmentController;



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

Route::get('/',[HomepageController::class,'home'])->name('homepage');

Route::get('/hlogin',[HomepageController::class,'hlogin'])->name('hlogin');


                       //register
Route::get('/register',[authController::class,'register'])->name('register');
Route::post('/register-submit',[authController::class,'register_submit'])->name('register.submit');


                          //login
Route::get('/login',[authController::class,'login'])->name('login');
Route::post('/login-submit',[authController::class,'login_submit'])->name('login.submit');




Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){




Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');

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
Route::get('/customer-table',[CustomerControlle::class,'table'])->name('customer.table');










#Beautician backend
Route::get('beautician/table',[BeauticianController::class,'table'])->name('beautician.table');
Route::get('/beautician-form',[BeauticianController::class,'form'])->name('beautician.form');
Route::post('/beautician-store',[BeauticianController::class,'store'])->name('beautician.store');





#Doctor backend
Route::get('doctor/table',[DoctorController::class,'table'])->name('doctor.table');
Route::get('/doctor-form',[DoctorController::class,'form'])->name('doctor.form');




#Pyament backend
Route::get('payment/table',[PaymentController::class,'table'])->name('payment.table');
Route::get('/payment-form',[PaymentController::class,'form'])->name('payment.form');
Route::post('/pyament-store',[PaymentController::class,'store'])->name('payment.store');





#Service backend
Route::get('service/table',[ServiceController::class,'table'])->name('service.table');
Route::get('/service-form',[ServiceController::class,'form'])->name('service.form');
Route::post('/service-store',[ServiceController::class,'store'])->name('service.store');




#Appointment backend
Route::get('appointment/table',[AppointmentController::class,'table'])->name('appointment.table');
Route::get('/appointment-form',[AppointmentController::class,'form'])->name('appointment.form');
Route::post('/appointment-store',[AppointmentController::class,'store'])->name('appointment.store');



});


