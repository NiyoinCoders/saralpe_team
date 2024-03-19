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
            'network' => $network
        ];

       $jsonData = json_encode($data);

        $service = 'cc-payment/ccpayment/generateotp';

        $body = "$jsonData";
        $res = ApiController::post($service, $body);


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
        $res = ApiController::post($service, $body);


    return $res;


    }



}
