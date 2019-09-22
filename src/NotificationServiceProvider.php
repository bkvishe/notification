<?php

namespace Choicetechlab\Notification;

use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/notification.php' => config_path('notification.php'),
        ], 'notification-config');
    }
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/notification.php',
            'notification'
        );
    }
}