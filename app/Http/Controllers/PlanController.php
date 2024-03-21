<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Validator;

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
        return view('admin.plans.plans')->with('data', $data);
    }
    public function add_plan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'plan_name' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Plan::create([
            'plan_name' => $request->plan_name,
            'status' => 1,
        ]);
        return redirect(route('plans.index'))->with('success', 'Plan Added Successfully!');
    }

    public function edit_plan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'plan_name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        $plan = Plan::findOrFail($request->plan_id);
        $plan->update([
            'plan_name' => $request->plan_name,
        ]);

        return response()->json(['success' => 'Plan Updated Successfully!']);
    }
    public function get_plans()
    {
        $data = Plan::all();
        return response()->json($data);
    }
    public function Fetch_planByID(Request $request)
    {
        $data = Plan::findOrFail($request->id);
        return response($data);
    }
    public function planStatusChange(Request $request)
    {
        $plan = Plan::findOrFail($request->id);
        $data['status'] = $request->value;
        $plan->update($data);
        return response()->json(['success' => 'Plan Status Updated Successfully!'], 200);
    }
    public function Delete_planByID(Request $request)
    {
        $data = Plan::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => 'Plan Deleted Successfully!'], 200);
    }
}
