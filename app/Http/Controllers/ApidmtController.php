<?php

namespace App\Http\Controllers;
use App\Models\JWT;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;


class ApidmtController extends Controller
{
    // API POST FUNCTION
    public static function post($service, array $body = [])
    {
        $partnerId = env('PAY_SPRINT_PARTNERID');
        $environment = env('PAY_SPRINT_ENVIORMENT');
        $aesEncryptionKey = env('PAY_SPRINT_AES_ENCRYPTION_KEY');
        $aesEncryptionIV = env('PAY_SPRINT_AES_ENCRYPTION_IV');
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



      // $callbacktocken = Helper::paysprintapitoken();
           $ingnature= $token;

         $authrisedkey = env("PAY_SPRINT_AUTHORISED_KEY");

        $client = new \GuzzleHttp\Client();

if (!empty($body)) {
    $client = new Client();
    $response = $client->request('POST', env('PAY_SPRINT_API_URL') . $service, [
        'body' => $body,
        'headers' => [
            'Authorisedkey' => $authrisedkey,
            'Content-Type' => 'application/json',
            'accept' => 'application/json',
            'Token' => $ingnature,
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
    $client = new Client();
    $response = $client->request('POST', env('PAY_SPRINT_API_URL') . $service, [
        'headers' => [
            'Authorisedkey' => $authrisedkey,
            'Content-Type' => 'application/json',
            'accept' => 'application/json',
            'Token' => $ingnature,
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
    }
    // API GET FUNCTION
    public function get()
    {
    }
}
