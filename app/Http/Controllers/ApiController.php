<?php
namespace App\Http\Controllers;
use App\Models\JWT;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as GuzzleClient;
use App\Models\User;
use App\HelperFunctions;
//use Helper;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Log;

use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\A1topup_operators;
use App\Models\A1topup_circles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
class ApiController extends Controller
{
    // API POST FUNCTION

    public function RechargeAPI($service, $body){
        /* $username=502658;
        $pwd='64s15jrr';
        $circlecode='16';
        $operatorcode='RC';
        $mobilenumber='7999897791';
        $amount='1';
        $orderid=56565765;
      $curl = curl_init();
      
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://business.a1topup.com/recharge/api?username= $username&pwd=$pwd&circlecode=$circlecode&operatorcode=$operatorcode&number=$mobilenumber&amount=$amount&orderid=$orderid&format=json',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        
      ));
      
      $response = curl_exec($curl);
      
      curl_close($curl); */
     // $response='{"txid":"0","status":"success","opid":"Invalid IP 223.236.46.206","number":"7999897791","amount":"15","orderid":"8543596945"}';
      //$response='{"txid":"0","status":"Failure","opid":"Invalid IP 223.236.46.206","number":"7999897791","amount":"15","orderid":"8543596945"}';
     // echo $response;
      
              
                      
          } 
    public static function post($service, $body)
    {

        $partnerId = env('PAY_SPRINT_PARTNERID');
        $environment = env('PAY_SPRINT_ENVIORMENT');
        $aesEncryptionKey = env('PAY_SPRINT_AES_ENCRYPTION_KEY');
        $aesEncryptionIV = env('PAY_SPRINT_AES_ENCRYPTION_IV');
        $jwtKey = env('PAY_SPRINT_JWT_TOKEN');
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



      // $callbacktocken = Helper::paysprintapitoken();
           $ingnature= $token;

         $authrisedkey = env("PAY_SPRINT_AUTHORISED_KEY");
        //require_once('vendor/autoload.php');
        $client = new \GuzzleHttp\Client();

        if (!empty($body)) {
            $response = $client->request('POST', env('PAY_SPRINT_API_URL') . $service, [
                'body'=> json_encode($body),
                'headers' => [
                    'Authorisedkey' => "$authrisedkey",
                    'Content-Type' => 'application/json',
                    'accept' => 'application/json',
                    'Token' => "$ingnature",
                ],
            ]);

            // Log the request and response
            Log::info('API Request', [
                'method' => 'POST',
                'url' => env('PAY_SPRINT_API_URL') . $service,
                'body' => $body,
                'headers' => [
                    'Authorisedkey' => $authrisedkey,
                    'Content-Type' => 'application/json',
                    'accept' => 'application/json',
                    'Token' => $ingnature,
                ],
            ]);
            Log::info('API Response', [
                'status' => $response->getStatusCode(),
                'body' => $response->getBody()->getContents(),
            ]);

            return $response->getBody();
        } else {
            $response = $client->request('POST', env('PAY_SPRINT_API_URL') . $service, [
                'headers' => [
                    'Authorisedkey' => "$authrisedkey",
                    'Content-Type' => 'application/json',
                    'accept' => 'application/json',
                    'Token' => "$ingnature",
                ],
            ]);

            // Log the request and response
            Log::info('API Request', [
                'method' => 'POST',
                'url' => env('PAY_SPRINT_API_URL') . $service,
                'headers' => [
                    'Authorisedkey' => $authrisedkey,
                    'Content-Type' => 'application/json',
                    'accept' => 'application/json',
                    'Token' => $ingnature,
                ],
            ]);
            Log::info('API Response', [
                'status' => $response->getStatusCode(),
                'body' => $response->getBody()->getContents(),
            ]);

            return $response->getBody();
        }
        // if (!empty($body)) {
        //     $response = $client->request('POST', env('PAY_SPRINT_API_URL') . $service, [
        //         'body'=> "$body",
        //         'headers' => [
        //             'Authorisedkey' => "$authrisedkey",
        //             'Content-Type' => 'application/json',
        //             'accept' => 'application/json',
        //             'Token' => "$ingnature",
        //         ],
        //     ]);

        //     return $response->getBody();

        // } else {
        //     $response = $client->request('POST', env('PAY_SPRINT_API_URL') . $service, [
        //         'headers' => [
        //             'Authorisedkey' => "$authrisedkey",
        //             'Content-Type' => 'application/json',
        //             'accept' => 'application/json',
        //             'Token' => "$ingnature",
        //         ],
        //     ]);

        //     return $response->getBody();
        // }
    }


    public function kyc(Request $request, $id)
    {
        $user = User::find($id);
        $mobile = $user->mobile;
       // $mobile = '8956356895';
        $partnerId = 'PS00845';
        $marchentid = 'sp56875555';

        // dd($user->mobile);

            $headers = json_encode(['alg' => 'HS256', 'typ' => 'JWT']);
            $headers_encoded = base64_encode($headers);

            //build the payload
            $payload = json_encode(['timestamp' => time(), 'partnerId' => 'PS00845', 'reqid' => time() . rand(111,999)]);
            $payload_encoded = base64_encode($payload);

            //build the signature
            $key = 'UFMwMDg0NWRiNTdjOGI4NDhmM2VhMTIyMWJlZTM0ZGFkNjljM2U2';
            $signature = hash_hmac('sha256', $headers_encoded . "." . $payload_encoded, $key, true);
            $signature_encoded = base64_encode($signature);

            //build and return the token
            $token = "$headers_encoded.$payload_encoded.$signature_encoded";

            // echo $token;
            $curl = curl_init();

            curl_setopt_array($curl, [
            CURLOPT_URL => "https://paysprint.in/service-api/api/v1/service/onboard/onboardnew/getonboardurl",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"merchantcode\":\"$marchentid\",\"mobile\":\"$mobile\",\"is_new\":\"0\",\"email\":\"kingwww@saralpe.in\",\"firm\":\"SARALPE INSIA\",\"callback\":\"http://127.0.0.1:8000/callbackurl\"}",
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "Token: $token",
                "Authorisedkey: NzMzOGExZjU2N2JhM2JhNjNmMzY3NjI1ZGM5M2M4ZTA=",
                "accept: application/json"
            ],
            ]);

            $curlResponse = curl_exec($curl); // Assuming you have executed the cURL request and stored the response in $curlResponse
            $err = curl_error($curl);
            $info = curl_getinfo($curl);
            $url = $info['url'];

            Helper::helperfunction1($curl, $id);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
        //! If response get in url then deduct 10 rupees statick from retailes account //
                return redirect($url);
            }

    }

    public function getoperatorlist(Request $request)
    {

            $servicelink = $request->data;
            $callbacktocken = Helper::paysprintapitoken();
            $ingnature= $callbacktocken;
            $authrisedkey = env("PAY_SPRINT_AUTHORISED_KEY");

            $client = new \GuzzleHttp\Client();

            $response = $client->request('POST', env('PAY_SPRINT_API_URL') . $servicelink, [
                'headers' => [
                    'Authorisedkey' => "$authrisedkey",
                    'Content-Type' => 'application/json',
                    'accept' => 'application/json',
                    'Token' => "$ingnature",
                ],
            ]);

            $responsed = $response->getBody();
            $data = json_decode($responsed, true);
            $option = '<option id="">Slect Operators</option>';

            foreach ($data['data'] as $index => $operator) {
                $category = $operator['category'];

                  echo  $option = '<option id="'.$operator['id'].'">' . $operator['name'] . '</option>';
            }

    }



}
