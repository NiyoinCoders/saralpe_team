<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetailerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {


        return view("b2b.dashboard.retailer.index");
    }
}
