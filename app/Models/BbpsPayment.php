<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BbpsPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'channel_id',
        'user_id',
        'category',
        'operator_id',
        'ca_number',
        'amount',
        'mode',
        'reference_id',
        'ackno',
        'response_message',
        'status',
        'json_response',
        'refunded',
        'refundtxnid',
        'status_check_response',
    ];
}
