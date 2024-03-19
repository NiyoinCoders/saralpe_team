<?php

namespace App\Libraries;

class MyLibrary
{
    public function paystoken()
    {

    $partnerId = env('PAY_SPRINT_PARTNERID');
    $environment = env('PAY_SPRINT_ENVIORMENT');
    $aesEncryptionKey = env('PAY_SPRINT_AES_ENCRYPTION_KEY');
    $aesEncryptionIV = env('PAY_SPRINT_AES_ENCRYPTION_IV');
    $jwtKey = env('PAY_SPRINT_JWT_KEY');
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

    public function addNumbers($num1, $num2)
    {
        return $num1 + $num2;
    }
}
