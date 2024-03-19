<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyBank extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank_name', 'acc_no','ifsc_code','holder_name','branch_add','status'
    ];
}
