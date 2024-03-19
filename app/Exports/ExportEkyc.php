<?php

namespace App\Exports;

use App\Models\Ekyc;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class ExportEkyc implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $datas  = Ekyc::select('id','firmname','pannumber','pincode','dob','stateid','pan_image','voter_front','voter_back','driving_front','driving_back','shopaddress','created_at')->get();
         
        return $datas;
    }
}
