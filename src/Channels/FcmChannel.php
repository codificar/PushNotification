<?php

namespace Codificar\PushNotificationFcm\Channels;

class FcmChannel extends GcmChannel
{
    /**
     * {@inheritdoc}
     */
    protected function pushServiceName()
    {
        return 'fcm';
    }
}
