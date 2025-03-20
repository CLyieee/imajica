<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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

            Route::get('/product-list', [DashboardController::class, 'product_list'])->name('page.product-list');

            Route::get('/order-list', [DashboardController::class, 'order_list'])->name('page.order-list');

            
            Route::get('/order-details', [DashboardController::class, 'order_details'])->name('page.order-details');
 
            Route::get('/add-product', [DashboardController::class, 'add_product'])->name('page.add-product');

            
            Route::get('/category-list', [DashboardController::class, 'category_list'])->name('page.category-list');

            Route::get('/system-settings', [DashboardController::class, 'system_settings'])->name('page.system-settings');

            Route::get('/customer-report', [DashboardController::class, 'customer_report'])->name('page.customer-report');

            Route::get('/service-product', [DashboardController::class, 'service_product'])->name('page.service-product');

            Route::get('/employee-report', [DashboardController::class, 'employee_report'])->name('page.employee-report');
            
            Route::get('/expenses-report', [DashboardController::class, 'expenses_report'])->name('page.expenses-report');




