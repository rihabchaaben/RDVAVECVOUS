<?php

namespace App\Mail\Front;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Bienvenue extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('emails.front.demandeurs.bienvenue')->subject('RDVavecVOUS Bienvenue');
        return $this->markdown('emails.front.demandeurs.bienvenue')->subject('[RDVavecVOUS] Bienvenue!');
    }
}
