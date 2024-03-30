<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class A1topup_circles extends Model
{
    use HasFactory;
    protected $fillable = ['circle_state','circle_code'];
}
