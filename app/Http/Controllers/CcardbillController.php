<?php

namespace App\Http\Controllers;

use App\Models\Ccardbill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class CcardbillController extends Controller
{
    public function ccardbill()
    {
        return view("b2b.ccardbillpay.ccardbill");
    }

    public function ccardbillpost(Request $request){
        $request->validate([
            'name'=>'required',
            'mobile'=>'required|numeric',
            'cardno'=>'required|numeric',
            'amount'=>'required|numeric',
            'remark'=>'required',
            'network'=>'required'
        ]);

        $refid = rand(1000000000, 999999999999);
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $cardno = $request->input('cardno');
        $amount = $request->input('amount');
        $remark = $request->input('remark');
        $network = $request->input('network');
   $payee_name=  $request->input('payee_name');
         $data = [
            'refid' => $refid,
            'name' => $name,
            'mobile' => $mobile,
            'card_number' => $cardno,
            'amount' => $amount,
            'remarks' => $remark,
            'network' => $network,
            'payee_name'=> $payee_name
        ]; 
        
//print_r($data);
//exit();
       $jsonData = json_encode($data);
//print_r($jsonData);
//exit();
        $service = 'cc-payment/ccpayment/generateotp';

        $body = "$jsonData";
       // $res = ApiController::post($service, $body);

       $res= '{
        "status": true,
        "response_code": 1,
        "message": "OTP Successfully send"
      }';
      echo $res;
        return redirect()->route('ccardbillpay.paybill', ['data1' => $data, 'data2' => $res]);


    }

    public function ccardbillpay(Request $request)
    {
        $dataArray1 = $request->query('data1');
        $dataArray2 = $request->query('data2');

    // Populate the form fields with the array data
    return view('b2b.ccardbillpay.paybill', ['dataArray1' => $dataArray1, 'dataArray2' => $dataArray2]);



    }

    // public function ccardbillfinal(Request $request)
    // {

    //     $refid = $request->input('refid');
    //     $name = $request->input('name');
    //     $mobile = $request->input('mobile');
    //     $cardno = $request->input('cardno');
    //     $amount = $request->input('amount');
    //     $remark = $request->input('remark');
    //     $network = $request->input('network');
    //     $otp = $request->input('otp');

    //     $data = [
    //         'refid' => $refid,
    //         'name' => $name,
    //         'mobile' => $mobile,
    //         'card_number' => $cardno,
    //         'amount' => $amount,
    //         'remarks' => $remark,
    //         'otp' => $otp,
    //         'network' => $network
    //     ];

    //     $jsonData = json_encode($data);

    // return $jsonData;

    // }

    public function ccardbillfinal1(Request $request)
    {

        $refid = $request->input('refid');
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $cardno = $request->input('card_number');
        $amount = $request->input('amount');
        $remark = $request->input('remarks');
        $network = $request->input('network');
        $otp = $request->input('otp');
        $payee_name=$request->input('payee_name');

        $data = [
            'refid' => $refid,
            'name' => $name,
            'mobile' => $mobile,
            'card_number' => $cardno,
            'amount' => $amount,
            'remarks' => $remark,
            'otp' => $otp,
            'network' => $network,
            'payee_name' => $payee_name,
        ];

        $jsonData = json_encode($data);

        $service = 'cc-payment/ccpayment/paybill';

        $body = "$jsonData";
       // $res = ApiController::post($service, $body);


    
    $response= '{
        "status": true,
        "response_code": 1,
        "ackno": 1547,
        "message": "Transaction Successful"
      }';
$res=json_decode($response);

      $status=$res->status;
      $ackno=$res->ackno;
      $message=$res->message;
$user_id = $request->user_id;
    
    $transactions = DB::table('transactions')->where('payable_id', $user_id)->first();
 
    $uuid="1234";
    ;
    $user = User::find($user_id);
$orderid="order".rand(1000000000, 999999999999);;
$cummison="10";
$ballance="10"; 
   $ccardbill=new Ccardbill;
   $ccardbill->refid=$refid;
   $ccardbill->name =$name;
   $ccardbill->mobile= $mobile;
   $ccardbill->card_number= $cardno;
   $ccardbill->amount= $amount;
   $ccardbill->remark=$remark;
   $ccardbill->otp=$otp;
   $ccardbill->network=$network;
   $ccardbill->payee_name=$payee_name;
   $ccardbill->status=$status;
   $ccardbill->ackno=$ackno;
   $ccardbill->message=$message;
   $ccardbill->uuid=$uuid;
   $ccardbill->orderid=$orderid;
   $ccardbill->cummison=$cummison;
   $ccardbill->ballance=$ballance;              
   $ccardbill->save();

   return $res;
    }

public function status_enquiry(Request $request){
    $refid="20210428";
    $data = [
        'refid' => $refid,
        
    ];

    $jsonData = json_encode($data);

    $service = 'cc-payment/ccpayment/status';

    $body = "$jsonData";
   // $res = ApiController::post($service, $body);
   $res='{
    "response_code": 1,
    "status": true,
    "data": {
      "txnid": "1547",
      "refid": "20210428",
      "name": "NITESH KUMAR SHARMA",
      "mobile": "8470000013",
      "card_number": "4207XXXXXXXX5483",
      "amount": "200.00",
      "charge": "23.60",
      "network": "VISA",
      "remarks": "BILL PAYMENT",
      "dateadded": "2021-04-15 18:35:29",
      "status": "Success"
    },
    "message": "Transaction Success"
  }';
    return $res;

}

public function refundOtp(Request $request){
    $refid="20210428";
    $ackno="1547";
    $data = [
        'refid' => $refid,
        'ackno' => 1547,
    ];

    $jsonData = json_encode($data);

    $service = 'cc-payment/ccpayment/resendotp';

    $body = "$jsonData";
    //$res = ApiController::post($service, $body);
    $res='{
        "response_code": 1,
        "status": true,
        "message": "Refund Otp Successfully Sent."
      }';
    return $res;
}

public function claimrefund(Request $request){
    $refid="20210428";
    $ackno="1547";
    
    $data = [
        'refid' => $refid,
        'ackno' => 1547,
        'otp'  => 222111
    ];

    $jsonData = json_encode($data);

    $service = 'cc-payment/ccpayment/resendotp';

    $body = "$jsonData";
    //$res = ApiController::post($service, $body);
    $res='
        {
            "response_code": 1,
            "status": true,
            "message": "Transaction Successfully Refunded"
          }';
    return $res;
}

}
