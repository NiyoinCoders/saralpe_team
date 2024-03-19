<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FastagController extends Controller
{
    //

    public function index(){
        $service = 'fastag/Fastag/operatorsList';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;


        return view("b2b.fastag.index", compact('apidata'));
    }

    public function getdispalyname(Request $request){
        $service = 'fastag/Fastag/operatorsList';
        //  recharge/recharge/dorecharge

        $body = array(
          "mode" => "online",
      );


       $res = json_decode(ApiController::post($service, $body));
       $apidata = $res->data;

       foreach($apidata as $data){

            if($data->id == $request->operator){

            $html = '<label class="form-label" for="pwd">'.$data->displayname.'</label>';
         $html .= '<input type="text" name="canumber" onclick="getLocation()"  class="form-control" id="mySelect"  required/>';

        }
       }




       return response()->json(['html' => $html]);
    }

    public function fetchconsumerdetails(Request $request){

        $service = 'fastag/Fastag/fetchConsumerDetails';
      //  recharge/recharge/dorecharge

        $body = array(
            "operator" => $request->operator, //$request->operator,
            "canumber" => $request->canumber, //$request->customer_id,
        );

        $res = json_decode(ApiController::post($service, $body));
            if($res->response_code == 1){

                $htmlTable = '<div id="tablehide">';
                $htmlTable .= '<table class="table">';
                $htmlTable .= '<h3>Bills Detais</h3>';
                $htmlTable .= '<tr><th>Name</th><th>Amount</th><th>Due Date</th></tr>';
                $htmlTable .= '<tr>';
                $htmlTable .= '<td><input type="hidden" name="name" value="'.$res->name.'">'.$res->name.'</td>';
                $htmlTable .= '<td><input type="hidden" name="amount" id="amontval" value="'.$res->amount.'">'.$res->amount.'</td>';
                $htmlTable .= '<td><input type="hidden" name="duedate" value="'.$res->duedate.'">'.$res->duedate.'</td>';
                $htmlTable .= '</tr>';
                $htmlTable .= '</table>';
                $htmlTable .= '</div>';

                $data = (array) $res;


                    return response()->json(['htmltable' => $htmlTable, 'data' => $data]);
    }
}

public function recharge(Request $res){
    $service = 'fastag/Fastag/recharge';
      //  recharge/recharge/dorecharge

        $body = array(
            "operator" => $res->operator, //$request->operator,
            "canumber" => $res->canumber,//$request->customer_id,
            "amount" => $res->amount,
            "referenceid" => 1234435687678,
            "latitude" => $res->latitude,
            "longitude"=> $res->longitude,
            "bill_fetch" => array(
                "billAmount"=> $res->billAmount,
                "billnetamount"=> $res->billnetamount,
                "dueDate"=> $res->dueDate,
                "maxBillAmount"=> $res->maxBillAmount,
                "acceptPayment"=> $res->acceptPayment,
                "acceptPartPay"=> $res->acceptPartPay,
                "cellNumber"=> $res->cellNumber,
                "userName" => $res->userName
            )

        );

        $res = json_decode(ApiController::post($service, $body));
            if($res->response_code == 1){
                return true;
            }
}


}
