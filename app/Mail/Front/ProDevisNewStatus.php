<?php

namespace App\Mail\Front;

use App\Devis;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProDevisNewStatus extends Mailable
{
    use Queueable, SerializesModels;

    public $devis;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Devis $devis)
    {
        $this->devis = $devis;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('emails.professionnels.devi_status', ['devis' => $this->devis])
        // ->subject('RDVavecVOUS Mission accomplis : Votre devis à été accepté');

        return $this->markdown('emails.professionnels.devi_status', ['devis' => $this->devis])
            ->subject('[RDVavecVOUS] Mission accomplis: Votre devis a été accepté');
    }
}
