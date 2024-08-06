<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Kommunikation extends Mailable
{
    use Queueable, SerializesModels;

    public $e_subject;
    public $nameSurname;
    public $phone;
    public $email;
    public $description;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($e_subject,$nameSurname,$phone,$email,$description)
    {
        $this->e_subject = $e_subject;
        $this->nameSurname = $nameSurname;
        $this->phone = $phone;
        $this->email = $email;
        $this->description = $description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.kommunikation')
                    ->subject('Kommunikation | Kontakt Formular')
                    ->with([
                        'e_subject'   => $this->e_subject,
                        'nameSurname' => $this->nameSurname,
                        'phone'       => $this->phone,
                        'email'       => $this->email,
                        'description' => $this->description,
                    ]);
    }
}
