<?php

namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaysprintCallback extends Model
{
    protected $table = 'paysprint_callbacks';
    protected $fillable = [
        "id", "callback_status", "callback_data", "callback_event", "created_at", "updated_at"
    ];

    use HasFactory;
}
