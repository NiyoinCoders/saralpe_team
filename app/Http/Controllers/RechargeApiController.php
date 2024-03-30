<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;


use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\A1topup_operators;
use App\Models\A1topup_circles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $operators = A1topup_operators::where('operator_service', '=', 'mobile')->get();
        $circles = A1topup_circles::get();
        return view('b2b.recharge.prepaid',compact('operators','circles'));
    }

    public function doRechargeprepaid(Request $request)
    {
        
      

        $body = array(
            "operator" => $request->operator,
            "canumber" => $request->phone,
            "amount" => $request->amount,
            "Circle" =>$request->Circle,
            "referenceid" => rand(9999999999,1000000000)
        );
        
      
        $user = User::first();
     $agentbalnce= $user->balance;
       echo $totalbalance= $agentbalnce-$request->amount;
    echo "<pre>";
      // echo $debit;
       print_r($body);



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
