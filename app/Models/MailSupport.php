<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailSupport extends Model
{
    protected $fillable = [
        'username',
        'phone',
        'address',
        'message',
        'read_status',
    ];

    protected $table = 'mail_supports';
}
