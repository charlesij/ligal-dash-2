<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = [
        'user_id',
        'profession',
        'profile_photo',
        'profile_background',
        'projects',
        'success_rate',
        'earning',
        'city',
        'state',
        'website',
        'age',
        'gender',
        'birthday',
        'phone',
        'experience',
        'personal_bio',
        'skills',
        'user_access',
        'user_preferences',
    ];

    protected $table = 'user_details';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
