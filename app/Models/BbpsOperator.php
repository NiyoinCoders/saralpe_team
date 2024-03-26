<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BbpsOperator extends Model
{
    use HasFactory;
    protected $fillable = [
        'operator_id',
        'operator_name',
        'category',
        'view_bill',
        'regex',
        'display_name',
        'status',
    ];
}
