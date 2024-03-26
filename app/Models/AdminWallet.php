<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminWallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'channel_id',
        'amount',
        'txn_type',
        'before_bal',
        'updated_bal',
        'remark',
        'created_by',
        'updated_by',
    ];
}
