<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $fillable = [
        'user_id',
        'user_ip',
        'route',
        'activity',
        'last_login',
    ];
    protected $table = 'user_activities';
}
