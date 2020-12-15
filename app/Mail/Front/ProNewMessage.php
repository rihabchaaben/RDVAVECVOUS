<?php

namespace App\Mail\Front;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProNewMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $proposition;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($proposition)
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
        // return $this->markdown('emails.professionnels.new_message', ['proposition' => $this->proposition])->subject('RDVavecVOUS Vous avez un nouveau message');
        return $this->markdown('emails.professionnels.new_message', ['proposition' => $this->proposition])->subject('[RDVavecVOUS] Vous avez un nouveau message');
    }
}
