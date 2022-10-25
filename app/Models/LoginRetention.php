<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginRetention extends Model
{
    use HasFactory;
    
    // App\Models\LoginRetention
    protected $fillable = ['user_id', 'login_ip', 'login_time', 'user_agent'];
}
