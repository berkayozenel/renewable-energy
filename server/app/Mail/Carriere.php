<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Carriere extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $surname;
    public $phone;
    public $email;
    public $cv_writing;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $surname,$phone,$email,$cv_writing)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->email = $email;
        $this->cv_writing = $cv_writing;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.carriere')
                    ->subject('Carriere | Bewerbungsformular')
                    ->with([
                        'name'       => $this->name,
                        'surname'    => $this->surname,
                        'phone'      => $this->phone,
                        'email'      => $this->email,
                        'cv_writing' => $this->cv_writing,
                    ]);
    }
}
