<?php

namespace App\Mail\Front;

use App\Proposition;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeNewProp extends Mailable
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
        // return $this->markdown('emails.front.demandeurs.new_proposition')->subject('RDVavecVOUS Nouvelle proposition pour votre demande', ['proposition' => $this->proposition]);
        return $this->markdown('emails.front.demandeurs.new_proposition')->subject('[RDVavecVOUS] Nouvelle proposition pour votre demande ', ['proposition' => $this->proposition]);
    }
}
