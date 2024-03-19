<?php

namespace App\Models;
use App\Models\Log;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Log extends Model
// {
   
// //     Log::create([
// //         'message' => 'This is a log message.',
// //         'level' => 'info',
// //     ]);

// //     use HasFactory;


// }


Log::create([
    'message' => 'This is a log message.',
    'level' => 'info',
]);