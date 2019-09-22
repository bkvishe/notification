<?php

namespace Choicetechlab\Notification\PushNotification;

use Choicetechlab\Notification\PushNotification\Services\PushNotificationInterface;

class PushNotificationManager
{

    protected $pushNotification;
    
    public function __construct(PushNotificationInterface $pushNotification) 
    {
        $this->push_notification = $pushNotification;
    }
    
    public function send($param)
    {
        return $this->push_notification->send($param);
    }
}