<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund_request extends Model
{
    use HasFactory;

    protected $fillable = [
        'channel_id',
        'order_id',
        'bank_id',
        'deposit_date',
        'payment_mode',
        'added_amount',
        'gst_per',
        'tax_amount',
        'amount',
        'receipt_no',
        'remark',
        'image',
        'status',
        'created_by',
        'updated_by'
    ];
}
