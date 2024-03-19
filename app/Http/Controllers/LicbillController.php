<?php

namespace App\Http\Controllers;

use App\Models\Licbill;
use Illuminate\Http\Request;

class LicbillController extends Controller
{

    public function lic()
    {
        return view("b2b.licbillpay.lic-bill");

    }

    public function licbillpay()
    {
        // return view("ccardbillpay.ccardbill");
        return 'hellookj';
    }



}
