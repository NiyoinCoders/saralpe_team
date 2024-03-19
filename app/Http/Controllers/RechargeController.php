<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\MobileRecharge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use Helper;

use function PHPUnit\Framework\returnSelf;

class RechargeController extends Controller
{


    public $recharhelink = "recharge/recharge/";

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prepaid()
    {

        $service = 'recharge/recharge/getoperator';
        $res = json_decode(ApiController::post($service, $service));
      //  dd($res);
        $operators = array();
        if ($res->responsecode == 1) {
            $operators = $res->data;
        }
        //dd($operators);
        return view('b2b.recharge.prepaid', compact('operators'));
    }
    public function dth()
    {
        $service = 'recharge/recharge/getoperator';
        $res = json_decode(ApiController::post($service, $service));
        $operators = array();
        if ($res->responsecode == 1) {
            $operators = $res->data;
        }
        return view('b2b.recharge.dth', compact('operators'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prepaid_store(Request $request)

    {

        $validated =  Validator::make($request->all(), [
            'phone' => 'required|max:10',
            'operator' => 'required',
            'amount' => 'required|numeric|min:10'
        ]);

        if ($validated->fails()) {
            return response(["status" => 'errors', 'messages' =>  $validated->errors()->all()]);
            exit();
        }

        $user_id = $request->user_id;
        $user = User::find($user_id);
        if ($user->balanceInt < $request->amount) {
            return response(["status" => 'error', 'msg' => 'Your Wallet Balance Is Low!']);
            exit();
        }
        $service = 'recharge/recharge/dorecharge';
        $body = array(
            "operator" => 11,
            "canumber" => $request->phone,
            "amount" => $request->amount,
            "referenceid" => rand(9999999999,1000000000)
        );
        // print_r($body); die;
        $res = json_decode(ApiController::post($service, $body));
        if($res->status){
            $user->withdraw($request->amount);
            return response(["status"=>"success","msg"=>$res->message,"refid"=>$res->refid,"ackno"=>$res->ackno]);
        }else{
            return response(["status"=>"warning","msg"=>$res->message]);

        }
    }


        public function doRecharge(Request $request)
        {

            $refid = rand(9999999999,1000000000);

            $body = array(
                "operator" => $request->operator,
                "canumber" => $request->phone,
                "amount" => $request->amount,
                "referenceid" => rand(9999999999,1000000000)
            );

            $authorised_key = env('PAY_SPRINT_AUTHORISED_KEY');
            $callbacktocken = Helper::paysprintapitoken();
            $token = $callbacktocken;

            $curl = curl_init();

            $requestData = [
                'operator' => $request->operator,
                'canumber' => $request->phone,
                'amount' => $request->amount,
                'referenceid' => $refid,
            ];

            $requestJson = json_encode($requestData);

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://paysprint.in/service-api/api/v1/service/recharge/recharge/dorecharge",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $requestJson,
                CURLOPT_HTTPHEADER => [
                    'Token: ' . $token,
                    'Authorisedkey: ' . $authorised_key,
                    "accept: text/plain",
                    "content-type: application/json"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            // Log the request
            $requestLog = [
                'url' => "https://paysprint.in/service-api/api/v1/service/recharge/recharge/dorecharge",
                'request_data' => $requestData,
                'headers' => [
                    'Token' => $token,
                    'Authorisedkey' => $authorised_key,
                    "accept" => "text/plain",
                    "content-type" => "application/json"
                ],
            ];

            \Log::info('API Request:', $requestLog);


            if ($err) {
                echo "cURL Error #:" . $err;
                \Log::error('cURL Error:', ['error' => $err]);
            } else {
                echo $response;

                // Log the response
                \Log::info('API Response:', ['response' => $response]);
            }


                // $dataArray = json_decode($response, true);
                // //If true  after recieving response you may submit into database
                // $formData = new MobileRecharge;
                // $formData->operatorid = $dataArray['operatorid'];
                // $formData->response_code = $dataArray['response_code'];
                // $formData->ackno = $dataArray['ackno'];
                // $formData->refid = $dataArray['refid'];
                // $formData->message = $dataArray['message'];
                // $formData->json_body = $response;
                // $formData->mobile = $request->phone;
                // // Assign values for other form fields
                // // Save the form data to the database
                // $formData->save();
                // if ($err) {

                //     return redirect()->route('recharge.prepaid')->with('success', 'cURL Error!');
                //     } else {
                //         return redirect()->route('recharge.prepaid')->with('success', 'Recharge submitted successfully!');
                //     }



        }

        public function getDropdownOptions(Request $request)
        {



                $authorised_key = env('PAY_SPRINT_AUTHORISED_KEY');
                $callbacktocken = Helper::paysprintapitoken();
                $token = $callbacktocken; // Output: Hello, World!

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => ''.$this->CI->config->item('api_url').'service/recharge/recharge/getoperator',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_HTTPHEADER => array(
                        'Token: ' . $token . '',
                        'Authorisedkey: ' . $authorised_key . ' '
                        // 'Cookie: ci_session=f4fca225452aaa5cfe98b6d53b7c3ff9574c6a2c'
                    ),
                ));

                $response = curl_exec($curl);
                curl_close($curl);
                return $response;
        }


        public function doRechargedth(Request $request)
        {
            $service = $this->recharhelink . 'dorecharge';
          //  recharge/recharge/dorecharge

            $body = array(
                "operator" => $request->operator,
                "canumber" => $request->customer_id,
                "amount" => $request->amount,
                "referenceid" => rand(9999999999,1000000000)
            );

            $res = json_decode(ApiController::post($service, $body));

            if ($res->response_code == 1) {
                return redirect()->route('recharge.dth')->with("status", $res);
            } else {
                return redirect()->route("recharge.dth")->with("danger", $res->message);
            }

        }

        public function doRechargeprepaid(Request $request)
        {
            $service = $this->recharhelink . 'dorecharge';
          //  recharge/recharge/dorecharge

            $body = array(
                "operator" => $request->operator,
                "canumber" => $request->phone,
                "amount" => $request->amount,
                "referenceid" => rand(9999999999,1000000000)
            );

            $res = json_decode(ApiController::post($service, $body));

            if ($res->response_code == 1) {
                return redirect()->route('recharge.prepaid')->with("status", $res);
            } else {
                return redirect()->route("recharge.prepaid")->with("danger", $res->message);
            }

        }


        public function status()
        {


            return view("b2b.recharge.status");

        }

        public function status1()
        {
            $service = 'dmt/refund/refund/';
          //  recharge/recharge/dorecharge

             $body = array(
                "referenceid" => 6290298063,
                "ackno" => 83228,
                "otp" => 764129
        );


        return $res = json_decode(ApiController::post($service, $body));
        }
}
