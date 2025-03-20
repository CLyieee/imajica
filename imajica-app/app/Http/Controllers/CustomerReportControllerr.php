<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerReportControllerr extends Controller
{
    public function index(){
        return view('page.customer-report');
    }
}
