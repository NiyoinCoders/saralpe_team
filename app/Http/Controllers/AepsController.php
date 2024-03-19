<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AepsController extends Controller
{
    public function index()
    {

           return view('b2b.bill-payment.aeps');

    }

    public function withdrawal(Request $request){
        // $request->validate([
        //     'mobile'=>'required',
        //     'aadhar'=>'required',
        //     //'bank'=>'required',
        //     //'device'=>'required',
        //     'amount'=>'required'
        // ]);
         // dd($request->all());
         $timezone = 'Asia/Kolkata';

         // Get the current date and time in the specified timezone
         $currentDateTime = Carbon::now($timezone);

         // Format the date and time as required (e.g., "2023-07-27 12:49:29")
         $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');

         // Output the formatted date and time for India

         $code = random_int(4000000000, 99999999999);

             $body = [
            "latitude"          => "26.1348711",
            "longitude"         => "85.38497",
            "mobilenumber"      => $request->input('mobilenumber'),
            "referenceno"       => "$code",
            "ipaddress"         => "122.44.443.00",
            "adhaarnumber"      => $request->input('adhaarnumber'),
            "accessmodetype"    => "SITE",
            "nationalbankidentification"  => $request->input('nationalbankidentification'),
            "data"              => $request->input('data'),
            "pipe"              => "bank1",
            "timestamp"         => $formattedDateTime,
            "transactiontype"   => $request->input('transactiontype'),
            "submerchantid"     => $request->input('submerchantid'),
            "amount"            => $request->input('amount')
        ];


        //  $request->all();
            $key = env('PAY_SPRINT_AES_ENCRYPTION_KEY');
               $iv =  env('PAY_SPRINT_AES_ENCRYPTION_IV');
          $datapost = $body;
          $cipher  =   openssl_encrypt(json_encode($datapost,true), 'AES-128-CBC', $key, $options=OPENSSL_RAW_DATA, $iv);
          $body=  base64_encode($cipher);

                 $body = array(
            "body" => "$body",
             );



        //   $service = 'aeps/cashwithdraw/index';

        //   $res = ApidmtController::post($service, $body);


        //   return    $res;

              $partnerId = env('PAY_SPRINT_PARTNERID');

              $jwtKey = env('JWT_SECRET');
              $authorisedKey = env('PAY_SPRINT_AUTHORISED_KEY');
              $apiUrl = env('PAY_SPRINT_API_URL');

          //build the headers
              $headers = json_encode(['alg' => 'HS256', 'typ' => 'JWT']);
              $headers_encoded = base64_encode($headers);

              //build the payload
              $payload = json_encode(['timestamp' => time(), 'partnerId' => $partnerId, 'reqid' => time() . rand(111,999)]);
              $payload_encoded = base64_encode($payload);

              //build the signature
              $key = $jwtKey;
              $signature = hash_hmac('sha256', $headers_encoded . "." . $payload_encoded, $key, true);
              $signature_encoded = base64_encode($signature);

              //build and return the token
              $token = "$headers_encoded.$payload_encoded.$signature_encoded";



              $curl = curl_init();

              curl_setopt_array($curl, [
                CURLOPT_URL => "https://paysprint.in/service-api/api/v1/service/aeps/cashwithdraw/index",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode([
                  'body' => $body
                ]),
                CURLOPT_HTTPHEADER => [
                  "Token: $token",
                  "accept: application/json",
                  "content-type: application/json",
                  "Authorisedkey => $authorisedKey"

                ],
              ]);

              return      $response = curl_exec($curl);
              $err = curl_error($curl);

              curl_close($curl);

              if ($err) {
                echo "cURL Error #:" . $err;
              } else {
                echo $response;
              }

    }

    public function balanceEnquiry(Request $request){
        $request->validate([
            'mobile'=>'required',
            'aadhar'=>'required',
            'bank'=>'required',
            'device'=>'required',

        ]);

  }


public function miniStatement(Request $request){
        $request->validate([
        'mobile'=>'required',
        'aadhar'=>'required',
        'bank'=>'required',
        'device'=>'required',

    ]);



}

  public function apesservies(Request $request){
    $request->validate([
        'pluspay'=>'required',
        'operator'=>'required',
        'adharno'=>'required',
        'mobile'=>'required',
        'amount'=>'required',
        'amount'=>'required',
    ]);
   // return dd($request->all());




  }

    public function aepspay()
    {
        return view('b2b.bill-payment.aepss');
    }
}
