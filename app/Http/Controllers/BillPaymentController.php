<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BillPayment;
use DB;

class BillPaymentController extends Controller
{
    public $billpay = "bill-payment/bill/";

    public function electricity_bill(){
        $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;
//print_r( $apidata);
//exit();
        return view("b2b.bill-payment.electricity-bill", compact('apidata'));
    }
    public function mobile_postpaid(){
        $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;

        return view("b2b.bill-payment.mobile-postpaid", compact('apidata'));
    }
    public function gas(){
        $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;

        return view("b2b.bill-payment.gas", compact('apidata'));
    }
    public function water(){
        $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;
        return view("b2b.bill-payment.water", compact('apidata'));
    }
    public function broad_band(){
        $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;
        return view("b2b.bill-payment.broad-band", compact('apidata'));
    }
    public function landline(){
        $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;
        return view("b2b.bill-payment.landline", compact('apidata'));
    }
    public function indurance(){
        $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;
        return view("b2b.bill-payment.indurance", compact('apidata'));
    }
    public function fastag(){
        $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;
        return view("b2b.bill-payment.fastag", compact('apidata'));
    }
    public function loan(){
        $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;
        return view("b2b.bill-payment.loan", compact('apidata'));
    }
    public function recharge(){
        return view("b2b.bill-payment.recharge");
    }
    public function dth(){
        return view("b2b.bill-payment.dth");
    }
    public function creditcard(){
        return view("b2b.bill-payment.creditcard");
    }
    public function moneytransfer(){
        return view("b2b.bill-payment.moneytransfer");
    }
    public function demo(){
        return view("b2b.bill-payment.demo");
    }
    public function rentpayment(){
        return view("b2b.bill-payment.rentpayment");
    }
    public function matm(){
        return view("b2b.bill-payment.matm");
    }
    public function aeps(){
        return view("b2b.bill-payment.aeps");
    }
    public function paymentrequest(){
        return view("b2b.bill-payment.payment-request");
    }


    public function fetchbillsdetails(Request $request)
    {
        $service = $this->billpay . 'fetchbill';
      //  recharge/recharge/dorecharge

        $body = array(
            "operator" => $request->operator, //$request->operator,
            "canumber" => $request->canumber, //$request->customer_id,
            "mode" => $request->mode,
        );

        $res = json_decode(ApiController::post($service, $body));
            if($res->response_code == 1){

                $htmlTable = '<div id="tablehide">';
                $htmlTable .= '<table class="table">';
                $htmlTable .= '<h3>Bills  Detais</h3>';
                $htmlTable .= '<tr><th>Name</th><th>Amount</th><th>Due Date</th></tr>';
                $htmlTable .= '<tr>';
                $htmlTable .= '<td><input type="hidden" name="name" value="'.$res->name.'">'.$res->name.'</td>';
                $htmlTable .= '<td><input type="hidden" name="amount" id="amontval" value="'.$res->amount.'">'.$res->amount.'</td>';
                $htmlTable .= '<td><input type="hidden" name="duedate" value="'.$res->duedate.'">'.$res->duedate.'</td>';
               
                $htmlTable .= '</tr>';
                $htmlTable .= '</table>';
                $htmlTable .= '</div>';

                $data = (array) $res;
                    
                   //print_r($data);

                    return response()->json(['htmltable' => $htmlTable, 'data' => $data]);


           }



    }
    public function bbpsbillpayment(Request $request){

        dd('dddddddddddddd');
    }

    public function getoperatorlist(Request $request){

        dd('dddddddddddddd');
    }


    public function paybills(Request $request)
    {

        $service = $this->billpay . 'paybill';
      //  recharge/recharge/dorecharge

        // $body = array(
        //     "operator" => $request->operator,
        //     "canumber" => $request->customer_id,
        //     "amount" => $request->amount,
        //     "referenceid" => rand(9999999999,1000000000),
        //     "mode" => "online",
        // );
        // dynamic body use for call api

        $bodymain = array(
            "operator" => $request->operator,
            "canumber" => $request->customer_id,
            "amount" => $request->amount,
            "referenceid" => rand(9999999999,1000000000),
            "latitude" => $request->latitude,
            "longitude" => $request->longitude,
            "mode" => "online",
            "bill_fetch" => array(
                "billAmount" =>  $request->billAmount,
                "billnetamount" =>  $request->billnetamount,
                "billdate" =>  $request->billdate,
                "dueDate" => $request->dueDate,
                "acceptPayment" => true,
                "acceptPartPay" => false,
                "cellNumber" => $request->customer_id,
                "userName" => "SALMAN"
            )
        );

        // body use for test only
        $body = array(
            "operator" => "11",
            "canumber" => "102277100",
            "amount" => "100",
            "referenceid" => "200185759589",
            "latitude" => "27.2232",
            "longitude" => "78.26535",
            "mode" => "online",
            "bill_fetch" => array(
                "billAmount" => "820.0",
                "billnetamount" => "820.0",
                "billdate" => "01Jan1990",
                "dueDate" => "2021-01-06",
                "acceptPayment" => true,
                "acceptPartPay" => false,
                "cellNumber" => "102277100",
                "userName" => "SALMAN"
            )
        );

        $res = json_decode(ApiController::post($service, $body));

        $formData = new BillPayment;
        $formData->status = $res->status;
        $formData->refid = $res->refid;
        $formData->response_code = $res->response_code;
        $formData->ackno = $res->ackno;
        $formData->operatorid = $res->operatorid;
        $formData->message = $res->message;
        $formData->canumber = $request->customer_id;
        $formData->amount = $request->amount;
        $formData->latitude = $request->latitude;
        $formData->longitude = $request->longitude;
        $formData->mode = $request->mode;
        $formData->billAmount = $request->operator;
        $formData->billnetamount = $request->operator;
        $formData->billdate = now();
        $formData->dueDate = $request->dueDate;
        $formData->cellNumber = $request->customer_id;
        $jsonString = json_encode($res); // Convert the $res object to a JSON string
        $formData->url_Json = $jsonString; // Assign the JSON string to the field
        $formData->save();

        if ($res->response_code == 1) {
            return redirect()->route('bbps.electricity_bill')->with("status", $res->message);
        } else {
            return redirect()->route("bbps.electricity_bill", $request->phone)->with("status", $res->message);
        }

    }

    public function getdisplaynameregx(Request $request){

      // $data  = DB::table('electricity')->where('id',$request->operator)->first();

      $service = 'bill-payment/bill/getoperator';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;

       foreach($apidata as $data){

            if($data->id == $request->operator){
                $displayname = $data->displayname;
                $regex = $data->regex;
            $html = '<label class="form-label" for="pwd">'.$data->displayname.'</label>';
         $html .= '<input type="text" name="canumber" onclick="getLocation()"  class="form-control" id="mySelect" pattern="'.$data->regex.'" oninvalid="setCustomValidity("Please enter Corect ")" required/>';

        }
       }




       return response()->json(['html' => $html, 'regex' => $regex, 'displayname'=> $displayname]);
    }


    public function paybill(Request  $request){
        return $request->all();
    }
}

