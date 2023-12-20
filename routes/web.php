<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\BranchController as branch;
use App\Http\Controllers\Backend\AssetController as Asset;
use App\Http\Controllers\Backend\CompanyController as company;
use App\Http\Controllers\Backend\CustomerController as customer;
use App\Http\Controllers\Backend\ProductController as product;
use App\Http\Controllers\Backend\ContractController as contract;
use App\Http\Controllers\Backend\LoadController as load;
use App\Http\Controllers\Backend\ProductTypeController as productType;
use App\Http\Controllers\Backend\UnitController as Unit;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\DriverPayrollController as driverpayroll;

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
Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'signOut'])->name('logOut');



Route::middleware(['checkauth'])->prefix('admin')->group(function(){
    Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
});
Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::resource('branch', branch::class);
    Route::resource('companies', company::class);
    Route::resource('assets', Asset::class);
    Route::resource('customers', customer::class);
    Route::resource('products', product::class);
    Route::resource('contracts', contract::class);
    Route::resource('loads', load::class);
    Route::resource('product_types', productType::class);
    Route::resource('driver_payroll', driverpayroll::class);
    Route::resource('units', Unit::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
});

 


    // Route::get('/', function () {
    //     return view('frontend.home');
    // });
// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');

