<?php

namespace Codificar\PushNotificationFcm\Channels;

class FcmV1Channel extends GcmChannel
{
    /**
     * {@inheritdoc}
     */
    protected function pushServiceName()
    {
        return 'fcmv1';
    }
}
