<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('b2b.reports.report');
    }

    public function filterdata(){
        return view('b2b.reports.filterdata');
    }

}
