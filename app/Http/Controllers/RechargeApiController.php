<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;


use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\A1topup_operators;
use App\Models\A1topup_circles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use  App\Http\Controllers\ApiController;

class RechargeApiController extends Controller
{
  //


  public function BalanceAPI()
  {
    $curl = curl_init();
    $username = 502658;
    $pwd = '64s15jrr';

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://business.a1topup.com/recharge/balance?username=$username&pwd=$pwd&format=json',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',

    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
  }

  public function StatusAPI($orderID)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://business.a1topup.com/recharge/status?username=502658&pwd=64s15jrr&orderid=$orderID&format=json',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',

    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
  }
  public function callback()
  {
  }

  public function utitlity()
  {
    // echo "ruksar";
    $username = 502658;
    $pwd = '64s15jrr';
    $circlecode = '16';
    $operatorcode = 'JPP';
    $number = '24243';
    $amount = '1';
    $orderid = 644544564;
    $stdcode = '0761';

    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => ' https://business.a1topup.com/recharge/api?username=$username&pwd=$pwd&circlecode= $circlecode&operatorcode=$operatorcode&number=$number&amount=$amount&orderid=$orderid&format=json&value1=$stdcode ',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',

    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
  }

  public function prepaid()
  {
    $operators = A1topup_operators::where('operator_service', '=', 'mobile')->get();
    $circles = A1topup_circles::get();
    return view('b2b.recharge.prepaid', compact('operators', 'circles'));
  }
  public function dth()
  {
    $operators = A1topup_operators::where('operator_service', '=', 'DTH')->get();
    $circles = A1topup_circles::get();
    return view('b2b.recharge.dth', compact('operators', 'circles'));
  }
  public function doRechargeprepaid(Request $request)
  {



    /*    
        $validated =  Validator::make($request->all(), [
          'phone' => 'required|max:10',
          'operator' => 'required',
          'amount' => 'required|numeric|min:10'
      ]); */

    /*  if ($validated->fails()) {
          return response(["status" => 'errors', 'messages' =>  $validated->errors()->all()]);
          exit();
      }

      $user_id = $request->user_id;
      $user = User::find($user_id);
      if ($user->balance < $request->amount) {
          return response(["status" => 'error', 'msg' => 'Your Wallet Balance Is Low!']);
          exit();
      } */
    $body = array(
      "operator" => $request->operator,
      "canumber" => $request->phone,
      "amount" => $request->amount,
      "Circle" => $request->Circle,
      "referenceid" => rand(9999999999, 1000000000)
    );
    $amount = $request->amount;

    $service =  'dorecharge';
    // $api=new ApiController();
    // $res = ($api->RechargeAPI($service, $body));
    //var_dump(json_decode($res));
    //print_r($res);
    $jsonData = '{"txid":"0","status":"Failure","opid":"Invalid IP 223.236.46.206","number":"7999897791","amount":"15","orderid":"8543596945"}';
    $jsonData = '{"txid":"0","status":"sucess","opid":"Invalid IP 223.236.46.206","number":"7999897791","amount":"15","orderid":"8543596945"}';

    $res = json_decode($jsonData, true);

    //echo $res['status'];


    //recharge::create($data);



    if ($res['status'] = 'success') {
      // $user->withdraw($request->amount);
      return redirect()->back()->with(['success' => 'recharge Added Successfully!']);
    } else {
      return redirect()->back()->with(['error' => 'transaction is failure']);
    }
  }

  public function doRechargedth(Request $request)
  {

    $validated =  Validator::make($request->all(), [

      'operator' => 'required',
      'amount' => 'required|numeric|min:10'
    ]);
    if ($validated->fails()) {
      return response(["status" => 'errors', 'messages' =>  $validated->errors()->all()]);
      exit();
    }

    $user_id = $request->user_id;
    $user = User::find($user_id);
    if ($user->balance < $request->amount) {
      return response(["status" => 'error', 'msg' => 'Your Wallet Balance Is Low!']);
      exit();
    }
    $body = array(
      "operator" => $request->operator,
      "customer_id" => $request->customer_id,
      "amount" => $request->amount,
      "Circle" => $request->Circle,
      "referenceid" => rand(9999999999, 1000000000)
    );

    $api = new ApiController();
    $res = json_decode($api->RechargeAPI($service, $body));

    if ($res->response_code == 1) {
      return redirect()->route('recharge.dth')->with("status", $res);
    } else {
      return redirect()->route("recharge.dth")->with("danger", $res->message);
    }


    /* $auth_id= Auth::id();
        $user = User::where('id', '=', Auth::id())->first();
        if($user->balance<$amount)
        {
          echo "insufficent balance please add amount in wallet";
        }
        else{
          $user->withdraw($amount);
          echo $agentbalnce= $user->balance;
          echo "<pre>";
         // echo $debit;
          print_r($body);
        }
        $user->deposit(400, ['description' => 'payment of taxes']); */
  }
  public function import()
  {
    Excel::import(new DataImport, request()->file('file'));

    return back();
  }
  public function import_excel()
  {
    return view('import');
  }
}
