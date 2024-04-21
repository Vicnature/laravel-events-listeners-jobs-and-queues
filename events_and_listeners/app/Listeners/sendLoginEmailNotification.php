<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Events\LoggedIn;
use App\Notifications\LoginNotification;
use Exception;

class sendLoginEmailNotification implements shouldQueue
{
    use InteractswithQueue;

    // try execution 5 times
    public $tries=5;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LoggedIn $event): void
    {
        try{
            // $event->$user->notify(new LoginNotification());
        }
        catch(Exception $e){
            dd($e);
        }
    }
}
