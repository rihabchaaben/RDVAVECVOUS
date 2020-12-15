<?php

namespace App\Mail\Front;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeSatisfaction extends Mailable
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
        // return $this->markdown('emails.front.demandeurs.enquete', ['url' => $this->url])->subject('Enquete de satisfaction');
        return $this->markdown('emails.front.demandeurs.enquete', ['url' => $this->url])->subject('Enquête de satisfaction');
    }
}
