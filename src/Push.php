<?php

namespace Choicetechlab\Notification;

use Choicetechlab\Notification\PushNotification\PushNotificationManager;
use Choicetechlab\Notification\PushNotification\Services\Firebase;
use Choicetechlab\Notification\PushNotification\Services\OneSignal;

class Push
{
    public static function send($param, $service)
    {   
        if($service == 'firebase'){
            
            $pushNotificationManager = new PushNotificationManager(new Firebase);
        }
        
        if($service == 'onesignal'){

            $pushNotificationManager = new PushNotificationManager(new OneSignal);
        }

        return $pushNotificationManager->send($param);
    }
}