<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileRecharge extends Model
{
    protected $table = 'recharge_mobile';
    protected $fillable = ['id','operatorid','response_code','ackno','refid','message','mobile','json_body','call_back_response','created_at','updated_at'];
    use HasFactory;
}
