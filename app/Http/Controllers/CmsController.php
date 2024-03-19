<?php

namespace App\Http\Controllers;

use App\Models\cms;
use Illuminate\Http\Request;

class CmsController extends Controller
{

    public function airtelcms()
    {
        $refid1 = $randomNumber = rand(1000000000, 999999999999);
        $latitude1 = "22.741582";
        $longitude1 = "75.8882395";

        $data = [
            'transaction_id' => $refid1,
            'latitude' => $latitude1,
            'longitude' => $longitude1
        ];

        $jsonData = json_encode($data);

       // $service = 'balance/balance/cashbalance';
        $service = 'airtelcms/airtel/generate_url';

        $body = "$jsonData";
        $res = ApiController::post($service, $body);
         $res;

        // $data = json_decode($res, true);
        // $status = $data['status'];
        // $responseCode = $data['response_code'];
        // $redirectUrl = $data['redirecturl'];
        // $message = $data['message'];


        $data = json_decode($res, true);

        if ($data['status'] === true) {
            // If the status is true, open the redirect URL
            $redirectUrl = str_replace('\/', '/', $data['redirecturl']);
            return redirect($redirectUrl);
            //return redirect($data['redirecturl']);
        } else {
            // If the status is false, show an error popup
            return response()->json(['error' => 'An error occurred.']);
        }


    }

    public function airtelcms2()
    {

        $refid1 = $randomNumber = rand(1000000000, 999999999999);
        $latitude1 = "22.741582";
        $longitude1 = "75.8882395";

        $data = [
            'refid' => $refid1,
            'latitude' => $latitude1,
            'longitude' => $longitude1
        ];

        $jsonData = json_encode($data);

       // $service = 'balance/balance/cashbalance';
        $service = 'airtelcms/V2/airtel/index';

        $body = "$jsonData";
        $res = ApiController::post($service, $body);
        return $res;

        // $data = json_decode($res, true);
        // $status = $data['status'];
        // $responseCode = $data['response_code'];
        // $redirectUrl = $data['redirecturl'];
        // $message = $data['message'];


        // $data = json_decode($res, true);

        // if ($data['status'] === true) {
        //     // If the status is true, open the redirect URL
        //     $redirectUrl = str_replace('\/', '/', $data['redirecturl']);
        //     return redirect($redirectUrl);
        //     //return redirect($data['redirecturl']);
        // } else {
        //     // If the status is false, show an error popup
        //     return response()->json(['error' => 'An error occurred.']);
        // }
    }


    public function finocms()
    {
        $refid1 = $randomNumber = rand(1000000000, 999999999999);
        $myurl = "https://saralpe.app/";
        $latitude1 = "22.741582";
        $longitude1 = "75.8882395";

        $data = [
            'transaction_id' => $refid1,
            'redirect_url' => $myurl
        ];

        $jsonData = json_encode($data);

       // $service = 'balance/balance/cashbalance';
        $service = 'finocms/fino/generate_url';

        $body = "$jsonData";
        $res = ApiController::post($service, $body);
         $res;

        $data = json_decode($res, true);

        if ($data['status'] === true) {
            // If the status is true, open the redirect URL
            $redirectUrl = str_replace('\/', '/', $data['redirecturl']);
            return redirect($redirectUrl);
            //return redirect($data['redirecturl']);
        } else {
            // If the status is false, show an error popup
            return response()->json(['error' => 'An error occurred.']);
        }

    }


}
