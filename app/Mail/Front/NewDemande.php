<?php

namespace App\Mail\Front;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewDemande extends Mailable
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
        // return $this->markdown('emails.professionnels.new_demande_ton_secteur')->subject('RDVavecVOUS Vous avez une nouvelle demande');
        return $this->markdown('emails.professionnels.new_demande_ton_secteur')->subject('[RDVavecVOUS] Vous avez une nouvelle demande');
    }
}
