<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillPayment extends Model
{
    protected $table = 'all_bill_pay';
    protected $fillable = [
        "id", 
        "status", 
        "referenceid", 
        //"response_code", 
        "ackno", 
        "operatorid", 
        "message", 
        "canumber", 
        "amount", 
        "latitude", 
        "longitude", 
        "mode", 
        "bill_fetch",
        "uuid", 
        "orderid",
        "cummison",
        "ballance",
        "updated_by", 
        "created_by", 
        "created_at", 
        "updated_at"
    ];
    use HasFactory;
}
