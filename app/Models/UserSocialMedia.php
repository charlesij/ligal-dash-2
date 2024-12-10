<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSocialMedia extends Model
{
    protected $fillable = [
        'user_id',
        'facebook',
        'google',
        'github',
        'twitter',
        'linkedin',
        'portfolio',
    ];
    protected $table = 'user_social_media';
}
