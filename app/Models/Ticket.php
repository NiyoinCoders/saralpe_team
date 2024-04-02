<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'complaint_id',
        'subject',
        'email',
        'product_type',
        'issue_type',
        'description',
        'file',
        'ticket_type',
        'support_issue',
        'request_logs',
        'response_logs',
        'remark',
        'mobile',
        'status',
    ];
}
