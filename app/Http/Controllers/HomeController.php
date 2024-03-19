<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Dc_Service;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
   public function commision_slots(){
    return view('admin.commision.index');
   }
   public function commision_slots_add(){
    $serves=\DB::table('services')->get();
    //print_r($data);
    //exit();
    return view('admin.commision.add',compact('serves'));
   }
   public function company_bank_add(){
    return view('admin.company_bank.add');
   }

   
   public function company_bank(){
    return view('admin.company_bank.index');
   }
   public function fund_request(){
    return view('admin.fund.request');
   }
   public function fund_transfer(){
    return view('admin.fund.transfer');
   }
   public function all_fund_transfer(){
    return view('admin.fund.all_transfer');
   }
   public function manage_services(){
    return view('admin.services.index');
   }
   public function services(){
    return view('admin.services.services');
   }
   public function ticket(){
    return view('admin.tickets.ticket');
   }
   public function raise_ticket(){
    return view('admin.tickets.raise_ticket');
   }
}
