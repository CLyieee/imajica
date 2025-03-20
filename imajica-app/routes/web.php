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

            Route::get('/sales-transaction', [DashboardController::class, 'sales_transaction'])->name('page.sales-transaction');

            Route::get('/employee-sales', [DashboardController::class, 'employee_sales'])->name('page.employee-sales');

            
            Route::get('/commision-employee', [DashboardController::class, 'commision_employee'])->name('page.commsion-employee');

            
            Route::get('/purchase', [DashboardController::class, 'purchase'])->name('page.purchase');

              
            Route::get('/void-logs', [DashboardController::class, 'void_logs'])->name('page.void-logs');