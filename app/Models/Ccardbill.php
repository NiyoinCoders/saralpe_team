<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ccardbill extends Model
{
    use HasFactory;

    protected $table = 'ccardbill';
    protected $fillable = ['id','refid','name','mobile','cardno','amount','remark','network'];
    
}
