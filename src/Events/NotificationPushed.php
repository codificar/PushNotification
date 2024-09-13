<?php

namespace Codificar\PushNotification\Events;

use Codificar\PushNotification\PushNotification;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotificationPushed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var \Codificar\PushNotification\PushNotification
     */
    public $push;

    /**
     * Create a new event instance.
     *
     * @param  \Codificar\PushNotification\PushNotification $push
     */
    public function __construct(PushNotification $push)
    {
        $this->push = $push;
    }
}
