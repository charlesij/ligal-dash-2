<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BroadcastVisitor implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userVisit;
    
    public function __construct($userVisit)
    {
        $this->userVisit = $userVisit;
    }

    public function broadcastOn(): array
    {
        return [
            new Channel('dash-visitor'),
        ];
    }
}
