<?php

namespace App\Listeners;

use App\Events\eventExample;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\userActivity;

class UserLoggedin
{
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
    public function handle(eventExample $event)
    {
    $person = $event->person;

    // Create a new user activity log
    $log = new UserActivity();
    $log->name = $person->name;
    $log->save();

    return redirect('/passed');
    // redirect not functional.Do more research
    }
}
