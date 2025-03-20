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
    public function customer_report()
    {
        return view('customer-report');
    }
    public function service_product()
    {
        return view('service-product');
    }
    public function employee_report()
    {
        return view('employee-report');
    }
    public function expenses_report()
    {
        return view('expenses-report');
    }
}
