<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission_log extends Model
{
    use HasFactory;
    protected $fillable = [
        'channel_id',
        'tid',
        'service_type',
        'user_id',
        'transaction_type',
        'transaction_value',
        'earned_amount',
        'tds',
        'commission_type',
        'commission_type_value',
        'charges',
        'status',
        'refunded',
        'type',
        'msg'
    ];
}
