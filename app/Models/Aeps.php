<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeps extends Model
{
    use HasFactory;
    protected $fillable = [
        'channel_id',
        'user_id',
        'mobile_no',
        'aadhar_no',
        'bank',
        'ackno',
        'referenceno',
        'bankrrn',
        'amount',
        'settled_amount',
        'gst_per',
        'tax_amount',
        'transaction_type',
        'response_message',
        'status',
        'json_response',
        'status_check_response',
        'verify_callback',
        'threeway_res',
        'threeway_hit_status',
        'record_type',
        'api',
        'txn_device',
    ];
}
