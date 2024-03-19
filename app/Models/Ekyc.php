<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekyc extends Model
{
    use HasFactory;

    protected $table = 'ekyc';
    protected $fillable = ['id','firmname','pannumber','pincode','dob','stateid','pan_image','voter_front','voter_back','driving_front','driving_back','shopaddress'];
    
}
