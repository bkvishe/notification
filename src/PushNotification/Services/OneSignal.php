<?php

namespace Choicetechlab\Notification\PushNotification\Services;

class OneSignal implements PushNotificationInterface
{
    public function send($param)
    {
        return $param . ' to onesignal';
    }
}
