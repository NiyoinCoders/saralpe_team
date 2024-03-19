<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nsdplpan extends Model
{
    protected $table = 'nsdl_pan';
    protected $fillable = ['id','refid','title','firstname','middlename','lastname','mode','gender','redirect_url','email','json_response','balance','url','status_code','response','created_at','updated_at'];
    use HasFactory;
}
