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
            'plan_id' => 'required|string',
            'service_id' => 'required|string',
            'commission_type' => 'required|string',
            'from_amount' => 'required|integer',
            'to_amount' => 'required|integer',
            'charges' => 'required|integer',
            'chain_type' => 'required|string',
            'type' => 'required|string',
            'username' => 'required|string',
        ];

        if ($request->has('commission_amt')) {
            $rules['commission_amt'] = 'required|integer';
        }
        if ($request->has('percentage')) {
            $rules['percentage'] = 'required|integer';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $commissionData = $validator->validated();
        Commission::create($commissionData);
        return response()->json(['success' => 'Commission Added Successfully!'], 201);
    }

    public function list_Commission()
    {
        $commissions = Commission::all();
        $commissionData = [];

        foreach ($commissions as $commission) {
            $role = Role::where('id', $commission->user_type)->first();
            $service = Service::where('id', $commission->service_id)->first();
            $plan = Plan::where('id', $commission->plan_id)->first();
            $data = [
                'id' => $commission->id,
                'user_type' => $role->name,
                'service_name' => $service->service_name,
                'commission_type' => $commission->commission_type,
                'from_amount' => $commission->from_amount,
                'to_amount' => $commission->to_amount,
                'percentage' => $commission->percentage,
                'commission_amt' => $commission->commission_amt,
                'plan' => $plan->plan_name,
                'chain_type' => $commission->chain_type,
                'status' => $commission->status,
            ];
            $commissionData[] = $data;
        }

        return response()->json($commissionData);
    }
    public function edit_Commission($id)
    {
        $commission = Commission::find($id);

        return view('admin.commision.edit')->with([
            'commissions' => $commission,
            'plans' => Plan::all(),
            'services' => Service::all(),
            'roles' => Role::all(),
        ]);
    }
}
