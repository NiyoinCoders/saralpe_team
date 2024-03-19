<?php

namespace App\Http\Controllers;


use App\Models\JWT;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Auth;


class WebkycController extends Controller
{
    //

    public function webkyc(){

        $remitter_detail = 'onboard/onboardnew/getonboardurl';
        $body = '{"merchantcode":"2","mobile":"9900990099","is_new":"0","email":"retailer@gmail.com","firm":"PAYMONEY","callback":"https:partner.com/callbackurl"}';
        $body = json_decode($body);

        $res = json_decode(ApiController::post($remitter_detail, $body));

        if ($res->response_code == 1) {
            echo "<script>window.open('".$res->redirecturl."', '_blank')</script> <a href='".url()->previous()."'>back</a>";
            //return back();
        }


    }
}
