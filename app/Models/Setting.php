<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Setting extends Model
{
    protected $guarded = [];
    protected $table = 'settings';
    protected $fillable = [
        'website_name'
    ];
    use HasFactory;
}
