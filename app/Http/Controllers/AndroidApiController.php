<?php
namespace App\Http\Controllers;
use App\Models\JWT;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as GuzzleClient;
use App\Models\User;
use App\Models\Role;
use App\Models\Setting;
use App\Models\BankList;
use App\Models\BillPayment;
use App\Models\RechargePlan;
use App\Models\prodcuts;
use App\Models\Invoice;
use App\Models\Ekyc;
use App\Models\DmtBeneficiary;
use App\Models\Dc_Service;
use App\Models\Carts;
use App\Models\MobileRecharge;
use App\Models\Loan;


use App\Models\RechargePlanCategory;

use App\HelperFunctions;
//use Helper;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Log;

class AndroidApiController extends Controller
{

    public function users(){
        $users= User::all();
        return response()->json($users);
    }
    public function RechargePlanCategories(){
        $RechargePlanCategories= RechargePlanCategory::all();
        return response()->json($RechargePlanCategories);
    }
    public function roles(){
        $roles= Role::all();
        return response()->json($roles);
    }
    public function Setting(){
        $Setting= Setting::all();
        return response()->json($Setting);
    }
    public function BankList(){
        $BankList= BankList::get();
        return response()->json($BankList);
    }
    public function BillPayment(){
        $BillPayment= BillPayment::get();
        return response()->json($BillPayment);
    }
    public function RechargePlan(){
        $RechargePlan= RechargePlan::get();
        return response()->json($RechargePlan);
    }
    public function prodcuts(){
        $prodcuts= prodcuts::get();
        return response()->json($prodcuts);
    }
    public function MobileRecharge(){
        $MobileRecharge= MobileRecharge::get();
        return response()->json($MobileRecharge);
    }
    public function Loan(){
        $Loan= Loan::get();
        return response()->json($Loan);
    }
    public function Invoice(){
        $Invoice= Invoice::get();
        return response()->json($Invoice);
    }
    public function Ekyc(){
        $Ekyc= Ekyc::get();
        return response()->json($Ekyc);
    }
    public function DmtBeneficiary(){
        $DmtBeneficiary= DmtBeneficiary::get();
        return response()->json($DmtBeneficiary);
    }
    public function Dc_Service(){
        $Dc_Service= Dc_Service::get();
        return response()->json($Dc_Service);
    }
    public function Carts(){
        $Carts= Carts::get();
        return response()->json($Carts);
    }
   



}
?>