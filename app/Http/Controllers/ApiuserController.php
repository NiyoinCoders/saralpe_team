<?php

namespace App\Http\Controllers;

class ApiuserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('b2b.dashboard.apiuser.index');
    }

    public function rechargeutility()
    {
        return view('b2b.dashboard.apiuser.rechargeutility');
    }

    public function payoutreport()
    {
        return view('b2b.dashboard.apiuser.payoutreport');
    }

    public function refundreport()
    {
        return view('b2b.dashboard.apiuser.refundreport');
    }

    public function ledger_report()
    {
        return view('b2b.dashboard.apiuser.ledger_report');
    }

    public function day_book()
    {
        return view('b2b.dashboard.apiuser.day_book');
    }

    public function dispute_report()
    {
        return view('b2b.dashboard.apiuser.dispute_report');
    }

    public function payment_credit_debit_report()
    {
        return view('b2b.dashboard.apiuser.payment_credit_debit_report');
    }

    public function payment_request()
    {
        return view('b2b.dashboard.apiuser.payment_request');
    }

    public function bank_information()
    {
        return view('b2b.dashboard.apiuser.bank_information');
    }

    public function login_history()
    {
        return view('b2b.dashboard.apiuser.login_history');
    }

    public function ip_callback_setting()
    {
        return view('b2b.dashboard.apiuser.ip_callback_setting');
    }

    public function alert_setting()
    {
        return view('b2b.dashboard.apiuser.alert_setting');
    }

    public function gst_invoicing()
    {
        return view('b2b.dashboard.apiuser.gst_invoicing');
    }
    public function mycreditbook()
    {
        return view('b2b.dashboard.apiuser.mycreditbook');
    }

    public function bbps_outlet()
    {
        return view('b2b.dashboard.apiuser.bbps_outlet');
    }

    public function bbps_complaints()
    {
        return view('b2b.dashboard.apiuser.bbps_complaints');
    }
}
