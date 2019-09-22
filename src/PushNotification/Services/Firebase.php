<?php

namespace Choicetechlab\Notification\PushNotification\Services;

class Firebase implements PushNotificationInterface
{
    public function send($param)
    {
        return $param . ' to firebase';
    }
}
