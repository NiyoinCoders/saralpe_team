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
        "refid", 
        "response_code", 
        "ackno", 
        "operatorid", 
        "message", 
        "canumber", 
        "amount", 
        "latitude", 
        "longitude", 
        "mode", 
        "billAmount", 
        "billnetamount", 
        "billdate", 
        "dueDate", 
        "acceptPayment", 
        "acceptPartPay", 
        "cellNumber", 
        "userName", 
        "url_Json", 
        "updated_by", 
        "created_by", 
        "created_at", 
        "updated_at"
    ];
    use HasFactory;
}
