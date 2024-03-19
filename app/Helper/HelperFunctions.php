<?php
namespace App\Helpers;
use App\Models\Employees;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as GuzzleClient;
use App\Models\User;
use App\Models\ApiResponse;
use App\Models\JWT;
use PDO;


class Helper {

    public static function paysprintapitoken()
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

        return $token;


    }


    public static function helperfunction1($response, $id){

        $user = User::find($id);
        $curlResponse = curl_exec($response);
        $err = curl_error($response);
        $info = curl_getinfo($response);
        $url = $info['url'];
        // inserting into database
        $db = new PDO("mysql:host=localhost;dbname=saral_pe", "root", "");
        // Prepare the insert statement
        $stmt = $db->prepare("INSERT INTO api_responses (response) VALUES (?)");
        // Bind the response data to the prepared statement
        $stmt->bindParam(1, $curlResponse, PDO::PARAM_STR);
        // Execute the insert statement
        $stmt->execute();
//      ApiResponse::create([
//              'response'=> $response
//         ]);
        $user->withdraw(10);
        // return redirect($url);
        // die();
    }

}
