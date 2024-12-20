<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionInfo extends Model
{
    protected $fillable = [
        'subs_email',
    ];

    protected $table = 'subscription_infos';
}
