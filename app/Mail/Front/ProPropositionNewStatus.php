<?php

namespace App\Mail\Front;

use App\Proposition;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\View\View;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProPropositionNewStatus extends Mailable
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
        $this->getPropositionStatus();
    }

    public function getPropositionStatus()
    {

        // $this->proposition->status == Proposition::ACCEPTE
        // ? $this->markdown('emails.professionnels.proposition_status', ['proposition' => $this->proposition])->subject('RDVavecVOUS Votre proposition à été accepté!') :
        // $this->markdown('emails.professionnels.proposition_refuse', ['proposition' => $this->proposition])->subject('RDVavecVOUS Annulation de votre rendez-vous avec ' . $this->proposition->demande->demandeur->nom);

        $this->proposition->status == Proposition::ACCEPTE
            ? $this->markdown('emails.professionnels.proposition_status', ['proposition' => $this->proposition])->subject('[RDVavecVOUS] Votre proposition a été acceptée!') :
            $this->markdown('emails.professionnels.proposition_refuse', ['proposition' => $this->proposition])->subject('[RDVavecVOUS] Annulation de votre rendez-vous avec ' . $this->proposition->demande->demandeur->nom);
        return $this;
    }
}