<?php
namespace App\Http\Controllers;
use App\Models\RechargePlan;
use App\Models\RechargePlanCategory;
use Illuminate\Http\Request;
use App\Models\A1topup_operators;
class RechargePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $operators = array();
        $service = 'recharge/recharge/getoperator';
        $res = json_decode(ApiController::post($service));
        if ($res->responsecode == 1) {
            $operators = $res->data;
        } */
        $operators = A1topup_operators::where('operator_service', '=', 'mobile')->get();
    
        $rechargeplans = RechargePlan::all();
        return view('b2b.recharge-plan.index', compact('rechargeplans', 'operators'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rechargeplancategories = RechargePlanCategory::all();
        $operators = array();
        $service = 'recharge/recharge/getoperator';
        $res = json_decode(ApiController::post($service));
        if ($res->responsecode == 1) {
            $operators = $res->data;
        }
        return view('b2b.recharge-plan.create', compact('rechargeplancategories', 'operators'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'plan_category' => 'required',
            'operator' => 'required',
            'validity' => 'required',
            'data' => 'required',
            'circle' => 'required',
            'price' => 'required',
            'desc' => 'required'
        ]);
        RechargePlan::create([
            'operator_id' => $request->operator,
            'circle' => $request->circle,
            'plan_category_id' => $request->plan_category,
            'data' => $request->data,
            'validity' => $request->validity,
            'price' => $request->price,
            'description' => $request->desc,
        ]);
        return redirect()->route('recharge-plan.index')->with("status", "Rechagre Plan Create Successfully!");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RechargePlan::destroy($id);
        return redirect()->route("recharge-plan.index")->with('status', 'Recharge Plan Delete Successfully!');
    }
    public function plan_list(Request $request)
    {
        $populars = RechargePlan::where("operator_id", $request->id)
            ->where("plan_category_id", 1)
            ->join('recharge_plan_categories','rechargpe_plan.plan_category_id','=','recharge_plan_categories.id')
            ->select('rechargpe_plan.*','recharge_plan_categories.plan_category_name')
            ->get();
        $special_recharge = RechargePlan::where("operator_id", $request->id)
            ->where("plan_category_id", 2)
            ->join('recharge_plan_categories','rechargpe_plan.plan_category_id','=','recharge_plan_categories.id')
            ->select('rechargpe_plan.*','recharge_plan_categories.plan_category_name')
            ->get();
        $top_up = RechargePlan::where("operator_id", $request->id)
            ->where("plan_category_id", 3)
            ->join('recharge_plan_categories','rechargpe_plan.plan_category_id','=','recharge_plan_categories.id')
            ->select('rechargpe_plan.*','recharge_plan_categories.plan_category_name')
            ->get();
        $internet_data = RechargePlan::where("operator_id", $request->id)
            ->where("plan_category_id", 4)
            ->join('recharge_plan_categories','rechargpe_plan.plan_category_id','=','recharge_plan_categories.id')
            ->select('rechargpe_plan.*','recharge_plan_categories.plan_category_name')
            ->get();
        $full_talktime = RechargePlan::where("operator_id", $request->id)
            ->where("plan_category_id", 5)
            ->join('recharge_plan_categories','rechargpe_plan.plan_category_id','=','recharge_plan_categories.id')
            ->select('rechargpe_plan.*','recharge_plan_categories.plan_category_name')
            ->get();
        $data = array(
            "populars" => $populars,
            "special_recharge" => $special_recharge,
            "top_up" => $top_up,
            "internet_data" => $internet_data,
            "full_talktime" => $full_talktime
        );
        return response(["data" => $data]);
    }
}
