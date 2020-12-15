<?php

namespace App\Mail\Front;

use App\Proposition;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeRdvConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public $proposition;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Proposition $proposition)
    {
        $this->proposition = $proposition;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('emails.front.demandeurs.rdv_confirmed', ['proposition' => $this->proposition])
        // ->subject('RDVavecVOUS Votre rendez-vous avec ' . $this->proposition->professionnel->nom . 'est confirmé');

        return $this->markdown('emails.front.demandeurs.rdv_confirmed', ['proposition' => $this->proposition])
            ->subject('[RDVavecVOUS] Votre rendez-vous avec ' . $this->proposition->professionnel->nom . ' est confirmé');
    }
}
