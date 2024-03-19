<?php

namespace App\Http\Controllers;

use App\Libraries\MyLibrary;
use Illuminate\Http\Request;
use App\Models\Nsdplpan;


class NsdlpanController extends Controller
{
    public function index()
    {

        return view('b2b.nsdlpan.nsdlpan');
    }

    public function nsdlpanlist()
    {

            $nsdplpan = Nsdplpan::all();

        return view('b2b.nsdlpan.nsdlformlist', compact('nsdplpan'));
    }


    public function panstore(Request $request)
    {

        // dd($request->all());
        // $JWT_SECRET = env('JWT_SECRET');
        // $PAY_SPRINT_AUTHORISED_KEY = env('PAY_SPRINT_AUTHORISED_KEY');
        // $PAY_SPRINT_JWT_TOKEN = env('PAY_SPRINT_JWT_TOKEN');

          $refid = $request->input('refid');
          $title = $request->input('title');
          $mode = $request->input('mode');
          $firstname = $request->input('firstname');
          $middlename = $request->input('middlename');
          $lastname = $request->input('lastname');
          $gender = $request->input('gender');
          $number = $request->input('number');
          $email = $request->input('email');
          $redirectUrl   ="https://techeramail.ml/retailer/nsdl/";


        // // Create a new FormData instance and populate it with the form data

         $my_array = '{
                "refid": "' . $refid .'",
                "title":"'.$title.'",
                "firstname":"'.$firstname.'",
                "middlename":"'.$middlename.'",
                "lastname":"'.$lastname.'",
                "mode":"'.$mode.'",
                "gender":"'.$gender.'",
                "redirect_url":"'.$redirectUrl.'",
                "email":"'.$email.'"
                      }';

                //build the headers
                $headers = json_encode(['alg' => 'HS256', 'typ' => 'JWT']);
                $headers_encoded = base64_encode($headers);

                //build the payload
                $payload = json_encode(['timestamp' => time(), 'partnerId' => 'PS00915', 'reqid' => time() . rand(111,999)]);
                $payload_encoded = base64_encode($payload);

                //build the signature
                $key = 'UFMwMDkxNThiMDY5ZGQ1YTE1MTVlYjgzZTQzM2E0YmZiYzk1NWIw';
                $signature = hash_hmac('sha256', $headers_encoded . "." . $payload_encoded, $key, true);
                $signature_encoded = base64_encode($signature);

                //build and return the token
                $token = "$headers_encoded.$payload_encoded.$signature_encoded";


                //after save datainto database then call to apiform
                require_once('vendor/autoload.php');

            $client = new \GuzzleHttp\Client();

            $response = $client->request('POST', 'https://paysprint.in/service-api/api/v1/service/pan/V2/generateurl', [
            'body' => $my_array,
               'headers' => [
                            'Authorisedkey' => 'M2VjNmIzYWQ0YzQyYWVmOTEzYjgxODgxYjcwYjQ2ZmM=',
                            'Content-Type' => 'application/json',
                            'Token' => $token,
                            'accept' => 'application/json',
                          ],
            ]);

            $data= $response->getBody();

            $data_array = json_decode($data, true);
            print_r($data_array);
            $encdata = $data_array['data']['encdata'];
            $urld = $data_array['data']['url'];



      //If true  after recieving response you may submit into database

        $formData = new Nsdplpan;
        $formData->refid = $request->refid;
        $formData->title = $request->title;
        $formData->firstname = $request->firstname;
        $formData->middlename = $request->middlename;
        $formData->lastname = $request->lastname;
        $formData->number = $request->number;
        $formData->email = $request->email;
        $formData->redirect_url = $urld;
        $formData->json_response = $encdata;
        $formData->response_body = $data;
        // Assign values for other form fields
        // Save the form data to the database
        $formData->save();
          echo '<br>';
        die;
        // Optionally, you can redirect the user to another page
        return redirect('/thank-you');
        // return view('b2b.nsdlpan.nsdlformlist');
    }

       public function nsdlpancallapi($id)
        {


                 //build the headers
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

                $my_array2 = '{
                    "refid": "' . $id .'"
                }';

                require_once('vendor/autoload.php');

                $client = new \GuzzleHttp\Client();

                $response = $client->request('POST', 'https://paysprint.in/service-api/api/v1/service/pan/V2/pan_status', [
                  'body' => $my_array2,
                  'headers' => [
                    'Authorisedkey' => 'NzMzOGExZjU2N2JhM2JhNjNmMzY3NjI1ZGM5M2M4ZTA=',
                    'Content-Type' => 'application/json',
                    'Token' => $token,
                    'accept' => 'application/json',
                  ],
                ]);

                echo $response->getBody();
                die();

           // return view('b2b.nsdlpan.nsdlformlist', compact('nsdplpan'));
        }


        public function nsdlpancallapitransstatus($id)
            {


                 //build the headers
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
                // echo '<br>'; die;

                $my_array2 = '{
                    "refid": "' . $id .'"
                }';


                require_once('vendor/autoload.php');

                $client = new \GuzzleHttp\Client();

                $response = $client->request('POST', 'https://paysprint.in/service-api/api/v1/service/pan/V2/txn_status', [
                  'body' => $my_array2,
                  'headers' => [
                    'Authorisedkey' => 'NzMzOGExZjU2N2JhM2JhNjNmMzY3NjI1ZGM5M2M4ZTA=',
                    'Content-Type' => 'application/json',
                    'Token' => $token,
                    'accept' => 'application/json',
                  ],
                ]);

                echo $response->getBody();

           // return view('b2b.nsdlpan.nsdlformlist', compact('nsdplpan'));
        }

        public function test()
        {
            $library = new MyLibrary();
           echo $library->paystoken(); // Output: Hello, World!

             //echo $library->addNumbers(5, 10); // Output: 15

        }

        public function testkit()
        {

            $paySprintKey = env('PAY_SPRINT_AUTHORISED_KEY');


            $library = new MyLibrary();
            $token = $library->paystoken(); // Output: Hello, World!



            require 'vendor/autoload.php';

            $client = new \GuzzleHttp\Client();

            $response = $client->request('POST', 'https://paysprint.in/service-api/api/v1/service/recharge/hlrapi/hlrcheck', [
            'body' => '"{\\"number\\":7000802198,\\"type\\":\\"mobile\\"}"',
            'headers' => [
                'Content-Type' => 'application/json',
                'Token' => $token,
                'Authorisedkey' => $paySprintKey,
                'accept' => 'application/json',
            ],
            ]);

            echo $response->getBody();






        //     require_once('vendor/autoload.php');

        //     $client = new \GuzzleHttp\Client();

        //     $response = $client->request('POST', 'https://paysprint.in/service-api/api/v1/service/recharge/hlrapi/hlrcheck', [
        //     'body' => '{"number":8448665756,"type":"mobile"}',
        //     'headers' => [
        //         'Content-Type' => 'application/json',
        //         'Token' => $token,
        //         'Authorisedkey' => $paySprintKey,
        //         'accept' => 'application/json',
        //     ],
        //     ]);



        // return $response->body();

        }



}
