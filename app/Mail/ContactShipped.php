<?php

namespace App\Mail;
use App\Contacto;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contacto $contact_data)
    {
        /*
        $this->firstname   = $contact_data->firstname;
        $this->lastname    = $contact_data->lastname;
        $this->email       = $contact_data->email;
        $this->information = $contact_data->information;
        $this->message     = $contact_data->message;
        */
        $this->firstname   = 'Juan Rael';
        $this->lastname    = 'Corrales Arellano';
        $this->email       = 'raelcorrales@gmail.com';
        $this->information = 'Hola';
        $this->mess        = 'Mensaje';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contacto_mail')->with([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'information' => $this->information,
            'mess' => $this->mess,
        ]);
    }
}
