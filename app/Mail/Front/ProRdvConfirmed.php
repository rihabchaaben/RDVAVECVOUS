<?php

namespace App\Mail\Front;

use App\Proposition;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProRdvConfirmed extends Mailable
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
        // return $this->markdown('emails.professionnels.Rdv_confirmed', ['proposition' => $this->proposition])
        // ->subject('RDVavecVOUS Rendez-vous confirmé avec Mr ou Mme ' . $this->proposition->demande->demandeur->nom);

        return $this->markdown('emails.professionnels.Rdv_confirmed', ['proposition' => $this->proposition])
            ->subject('[RDVavecVOUS] Rendez-vous confirmé avec ' . $this->proposition->demande->demandeur->nom);
    }
}
