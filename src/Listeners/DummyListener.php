<?php

namespace Ridrog\Dummy\Listeners;

use Illuminate\Support\Facades\Log;
use Ridrog\Dummy\Events\DummyEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DummyListener
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

    /**
     * Handle the event.
     *
     * @param  DummyEvent  $event
     * @return void
     */
    public function handle(DummyEvent $event)
    {
        Log::info("dummy event was fired");
    }
}
