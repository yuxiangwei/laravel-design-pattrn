<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // app/Listeners/SendWelcomeMail.php
    public function handle(UserRegistered $event)
    {
        // send welcome email
        echo '发送欢迎邮箱通知...';
    }

}
