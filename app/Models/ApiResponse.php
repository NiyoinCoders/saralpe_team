<?php

namespace App\Models;
//use App\Models\ApiResponse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiResponse extends Model
{

    protected $table = 'api_responses';
    protected $fillable = ['id','userid','url','status_code','response','created_at','updated_at'];
    use HasFactory;
}

// ApiResponse::create([
//     'url' => $url,
//     'status_code' => $statusCode,
//     'response' => $response->getBody(),
// ]);
