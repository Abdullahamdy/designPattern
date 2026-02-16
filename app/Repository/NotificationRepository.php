<?php

namespace App\Repository;

use App\Models\Notification;

class NotificationRepository
{
    public function store(
        string $channel,
        string $message,
        array $meta
    ): Notification {

        return Notification::create([
            'channel' => $channel,
            'message' => $message,
            'meta' => $meta,
        ]);
    }
}
