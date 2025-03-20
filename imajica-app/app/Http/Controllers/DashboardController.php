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

    public function loyalty_list()
    {
        return view('page.loyalty-list');
    }
    public function new_patient()
    {
        return view('page.new-patient');
    }
    public function patient_list()
    {
        return view('page.patient-list');
    }
    public function new_supplier()
    {
        return view('page.new-supplier');
    }
    public function supplier_list()
    {
        return view('page.supplier-list');
    }
    public function new_staff()
    {
        return view('page.new-staff');
    }
    public function staff_list()
    {
        return view('page.staff-list');
    } 
    public function new_branch()
    {
        return view('page.new-branch');
    }  
    public function branch_list()
    {
        return view('page.branch-list');
    }
}
