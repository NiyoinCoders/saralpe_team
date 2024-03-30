<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class A1topup_operators extends Model
{
    use HasFactory;
    protected $fillable = ['operator_name','operator_code','operator_service'];
}
