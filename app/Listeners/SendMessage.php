<?php

namespace App\Listeners;

use App\Events\NewMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessage
{
    /**
     * Handle the event.
     *
     * @param  NewMessage  $event
     * @return void
     */
    public function handle(NewMessage $event)
    {
//        $message = $event->getMessage();
    }
}
