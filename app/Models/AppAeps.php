<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppAeps extends Model
{
    use HasFactory;
    protected $fillable = [
        'token',
        'channel_id',
        'pid',
        'user_id',
        'mobile_no',
        'adhaar_no',
        'bank',
        'remark',
        'amount',
        'transactiontype',
        'device',
    ];
}
