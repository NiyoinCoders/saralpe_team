<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmtBankList extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank_id',
        'bank_name',
        'ifsc',
        'pennydrop',
        'type',
        'status',
    ];
}
