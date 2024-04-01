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
    public function ticket()
    {
        return view('b2b.tickets.ticket');
    }
    public function raise_ticket()
    {
        return view('b2b.tickets.raise_ticket');
    }
    public function account_configuration()
    {
        return view('b2b.tickets.account_configuration');
    }
    public function transaction_related()
    {
        return view('b2b.tickets.transaction_related');
    }
    public function tech_support()
    {
        return view('b2b.tickets.tech_support');
    }
    public function commision_issue()
    {
        return view('b2b.tickets.commision_issue');
    }
    public function other()
    {
        return view('b2b.tickets.other');
    }
}
