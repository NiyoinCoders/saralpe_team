<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.plans.index');
    }
    public function plans_list()
    {
        $data = Plan::all();
        return view('admin.plans.plans')->with('data',$data);
    }
}
