<?php

namespace App\Http\Controllers;

class DistributorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('b2b.dashboard.distributor.index');
    }

    public function bclistadd()
    {
        return view('b2b.dashboard.distributor.bclistadd');
    }

    public function recharge()
    {
        return view('b2b.dashboard.distributor.recharge-utility-report'); 
    }

    public function payout_report()
    {
        return view('b2b.dashboard.distributor.payout-report');
    }

    public function ledger_report()
    {
        return view('b2b.dashboard.distributor.ledger-report');
    }  

    public function top_distributer()
    {
        return view('b2b.dashboard.distributor.top-distributer');
    }

    public function top_retailer()
    {
        return view('b2b.dashboard.distributor.top-retailer');
    }

    public function day_book()
    {
        return view('b2b.dashboard.distributor.day-book');
    }

    public function balance_transfer_report()
    {
        return view('b2b.dashboard.distributor.balance-transfer-report');
    }

    public function my_creadit_book()
    {
        return view('b2b.dashboard.distributor.my-creadit-book');
    }

    public function payment_credit_debit()
    {
        return view('b2b.dashboard.distributor.payment-credit-debit');
    }

    public function payment_request()
    {
        return view('b2b.dashboard.distributor.payment-request');
    }

    public function bank_information()
    {
        return view('b2b.dashboard.distributor.bank-information');
    }

    public function login_history()
    {
        return view('b2b.dashboard.distributor.login-history');
    }

    public function alert_settings()
    {
        return view('b2b.dashboard.distributor.alert-settings');
    }

    public function my_distributors()
    {
        return view('b2b.dashboard.distributor.my-distributors');
    }

    public function my_downline()
    {
        return view('b2b.dashboard.distributor.my-downline');
    }

    public function distributor_slab()
    {
        return view('b2b.dashboard.distributor.distributor-slab');
    }

    public function retailer_slab()
    {
        return view('b2b.dashboard.distributor.retailer-slab');
    }

    public function collection_book()
    {
        return view('b2b.dashboard.distributor.collection-book');
    }

    public function credit_book()
    {
        return view('b2b.dashboard.distributor.credit-book');
    }

    public function gst_invoicing()
    {
        return view('b2b.dashboard.distributor.gst-invoicing');
    }

    public function P_L_statement()
    {
        return view('b2b.dashboard.distributor.P-L-statement');
    }

    public function number_lookup()
    {
        return view('b2b.dashboard.distributor.number-lookup');
    }

   
}
