<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Commission;
use App\Models\Plan;
use App\Models\Service;
use App\Models\Role;

class CommissionController extends Controller
{
    public function add_Commission(Request $request)
    {
        $rules = [
            'user_type' => 'required|string',
            'plan' => 'required|string',
            'serves_type' => 'required|string',
            'commission_type' => 'required|string',
            'from_amount' => 'required|integer',
            'to_amount' => 'required|integer',
            'tds_gst' => 'required|integer',
            'chain_type' => 'required|string',
            'transaction_type' => 'required|string',
            'username' => 'required|string',
        ];

        if ($request->has('commission_amount')) {
            $rules['commission_amount'] = 'required|integer';
        }
        if ($request->has('commission_percentage')) {
            $rules['commission_percentage'] = 'required|integer';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $commissionData = json_encode($validator->validated());
        Commission::create(['data' => $commissionData]);
        return response()->json(['success' => 'Commission Added Successfully!']);
    }
    public function list_Commission()
    {
        $commissions = Commission::all();
        return response()->json($commissions);
    }
    public function edit_Commission($id)
    {
        $commissions = Commission::where('id', $id)->get();
        $service = Service::all();
        $role = Role::all();
        $plans = Plan::all();

        return view('admin.commision.edit')->with(['commissions' => $commissions, 'plans' => $plans, 'service' => $service, 'role' => $role]);
    }
}
