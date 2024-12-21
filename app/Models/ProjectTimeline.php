<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTimeline extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
        'color',
        'day',
        'time',
        'date',
    ];
    protected $table = 'project_timelines';
}
