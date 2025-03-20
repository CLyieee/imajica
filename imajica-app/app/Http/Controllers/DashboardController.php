<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('page.dashboard');
    }

    public function new_coupon()
    {
        return view('page.new-coupon');
    }

    public function coupon_list()
    {
        return view('page.coupon-list');
    }

    public function new_loyalty()
    {
        return view('page.new-loyalty');
    }

    public function sales_transaction()
    {
        return view('page.sales-transaction');
    }
    public function employee_sales()
    {
        return view('page.employee-sales');
    }

    public function commision_employee()
    {
        return view('page.commision-employee');
    }

    public function purchase()
    {
        return view('page.purchase');
    }
    public function void_logs()
    {
        return view('page.void-logs');
    }
    public function product_list()
    {
        return view('page.product-list');
    }
    public function order_list()
    {
        return view('page.order-list');
    }
    public function order_details()
    {
        return view('page.order-details');
    }
    public function add_product()
    {
        return view('page.add-product');
    }
    public function category_list()
    {
        return view('page.category-list');
    }
    public function system_settings()
    {
        return view('page.system-settings');
    }
}

