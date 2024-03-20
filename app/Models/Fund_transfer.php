<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund_transfer extends Model
{
    use HasFactory;
    protected $fillable = [
        'channel_id',
        'to_user_id',
        'from_user_id',
        'amount',
        'type',
        'txn_id',
        'status',
        'remark',
        'rcv_before_bal',
        'rcv_updated_bal'
    ];
}
