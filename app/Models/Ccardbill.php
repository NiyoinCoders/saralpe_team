<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ccardbill extends Model
{
    use HasFactory;

    protected $table = 'credit_cards';
    protected $fillable = ['refid','name','mobile','card_number','amount','remark','network','payee_name','status','ackno','message','uuid','orderid','cummison','ballance'];
    
}
