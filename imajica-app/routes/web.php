<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LoginController::class, 'index'])->name('page.index');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('page.dashboard');

Route::get('/new-coupon', [DashboardController::class, 'new_coupon'])->name('page.new-coupon');

Route::get('/coupon-list', [DashboardController::class, 'coupon_list'])->name('page.coupon-list');

Route::get('/new-loyalty', [DashboardController::class, 'new_loyalty'])->name('page.new-loyalty');

Route::get('/loyalty-list', [DashboardController::class, 'loyalty_list'])->name('page.loyalty-list');

Route::get('/new-patient', [DashboardController::class, 'new_patient'])->name('page.new-patient');

Route::get('/patient-list', [DashboardController::class, 'patient_list'])->name('page.patient-list');

Route::get('/new-supplier', [DashboardController::class, 'new_supplier'])->name('page.new-supplier');

Route::get('/supplier-list', [DashboardController::class, 'supplier_list'])->name('page.supplier-list');

Route::get('/new-staff', [DashboardController::class, 'new_staff'])->name('page.new-staff');

Route::get('/staff-list', [DashboardController::class, 'staff_list'])->name('page.staff-list');