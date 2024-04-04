<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class MobileRecharge extends Model
{
    protected $table = 'recharge_mobile';
    protected $fillable = ['circlecode','operatorcode','number','amount','orderid','status','txid','opid','merchant_code','uuid','cummison','ballance','created_at','updated_at'];
    use HasFactory;
}
