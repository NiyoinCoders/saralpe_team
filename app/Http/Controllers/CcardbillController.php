<?php

namespace App\Http\Controllers;

use App\Models\Ccardbill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

        $refid = $randomNumber = rand(1000000000, 999999999999);
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $cardno = $request->input('cardno');
        $amount = $request->input('amount');
        $remark = $request->input('remark');
        $network = $request->input('network');

         $data = [
            'refid' => $refid,
            'name' => $name,
            'mobile' => $mobile,
            'card_number' => $cardno,
            'amount' => $amount,
            'remarks' => $remark,
            'network' => $network,
            'payee_name'=> "rukhsar bano ansari",
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

        $data = [
            'refid' => $refid,
            'name' => $name,
            'mobile' => $mobile,
            'card_number' => $cardno,
            'amount' => $amount,
            'remarks' => $remark,
            'otp' => $otp,
            'network' => $network
        ];

        $jsonData = json_encode($data);

        $service = 'cc-payment/ccpayment/paybill';

        $body = "$jsonData";
       // $res = ApiController::post($service, $body);


    
    $res= '{
        "status": true,
        "response_code": 1,
        "ackno": 1547,
        "message": "Transaction Successful"
      }';
return $res;

    }

public function status_enquiry(){
    $refid="20210428";
    $data = [
        'refid' => $refid,
        
    ];

    $jsonData = json_encode($data);

    $service = 'cc-payment/ccpayment/status';

    $body = "$jsonData";
    $res = ApiController::post($service, $body);
    return $res;
}

public function refundOtp(){
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

public function claimrefund(){
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
