<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;
    protected $fillable = [
        'channel_id',
        'user_type',
        'new_user_type',
        'service_id',
        'commission_type',
        'for_specific_user',
        'from_amount',
        'to_amount',
        'percentage',
        'commission_amt',
        'charges',
        'operator_id',
        'plan_id',
        'chain_type',
        'type',
        'transaction_type',
        'username',
        'status'
    ];
}
