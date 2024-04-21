<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendReservationEmail implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(ReservationCreated $event)
    {
        // Access the reservation from the event
        $reservation = $event->reservation;

        // Send reservation confirmation email
        $firstname = $reservation->user->firstname;
        $room_number = $reservation->room->number;
        $email = $reservation->user->email;

        // LOGIC FOR SENDING EMAIL HERE
         // Access the reservation from the event
         $reservation = $event->reservation;

         // Send reservation confirmation email
         $firstname = $reservation->user->firstname;
         $room_number = $reservation->room->number;
         $email = $reservation->user->email;
 
         // Add this Code
         Mail::to($email)->send(new ReservationNotifyEmail($firstname, $room_number));
    }
}
