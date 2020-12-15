<?php

namespace App\Mail\Front;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProBienvenue extends Mailable
{
    use Queueable, SerializesModels;

    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('emails.professionnels.bienvenue',['url' => $this->url])->subject('RDVavecVOUS Bienvenue!');
        return $this->markdown('emails.professionnels.bienvenue',['url' => $this->url])->subject('[RDVavecVOUS] Bienvenue!');
    }
}
