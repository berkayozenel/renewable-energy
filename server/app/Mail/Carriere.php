<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Carriere extends Mailable
{
    use Queueable, SerializesModels;

    public $nameSurname;
    public $phone;
    public $email;
    public $cv_writing;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nameSurname,$phone,$email,$cv_writing)
    {
        $this->nameSurname = $nameSurname;
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
                        'name'       => $this->nameSurname,
                        'phone'      => $this->phone,
                        'email'      => $this->email,
                        'cv_writing' => $this->cv_writing,
                    ]);
    }
}
