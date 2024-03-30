<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;


class RechargeApiController extends Controller
{
    //
    public function RechargeAPI(){
  $username=502658;
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

curl_close($curl);
echo $response;

        
                
    } 
    
    public function BalanceAPI(){
        $curl = curl_init();
 $username=502658;
  $pwd='64s15jrr';
 
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://business.a1topup.com/recharge/balance?username=$username&pwd=$pwd&format=json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    }
    
   public function StatusAPI($orderID){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://business.a1topup.com/recharge/status?username=502658&pwd=64s15jrr&orderid=$orderID&format=json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    }
   public function callback(){
       
   }
   
   public function utitlity(){
      // echo "ruksar";
 $username=502658;
  $pwd='64s15jrr';
  $circlecode='16';
  $operatorcode='JPP';
  $number='24243';
  $amount='1';
  $orderid=644544564;
$stdcode='0761';

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => ' https://business.a1topup.com/recharge/api?username=$username&pwd=$pwd&circlecode= $circlecode&operatorcode=$operatorcode&number=$number&amount=$amount&orderid=$orderid&format=json&value1=$stdcode ',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


}

public function prepaid()
    {

        return view('b2b.recharge.prepaid');
    }
    public function import() 
    {
        Excel::import(new DataImport,request()->file('file'));
               
        return back();
    }
    public function import_excel(){
        return view('import');
    }
}
