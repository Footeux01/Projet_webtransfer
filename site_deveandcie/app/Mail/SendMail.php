<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Elements de contact
     * @var array
     */
    public $contact;
    public $realname; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $contact,$realname)
    {
        //
        $this->contact = $contact;
        $this->realname = $realname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('d.leger@aformac-vichy.fr')->view('email');
    }
}
