<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Solution extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $nameSurname;
    public $phone;
    public $email;
    public $country;
    public $city;
    public $stationType;
    public $description;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title,$nameSurname,$phone,$email,$city,$country,$stationType,$description)
    {
        $this->title       = $title;
        $this->nameSurname = $nameSurname;
        $this->phone       = $phone;
        $this->email       = $email;
        $this->city        = $city;
        $this->country     = $country;
        $this->stationType = $stationType;
        $this->description = $description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.solution')
                    ->subject('Geschäftslösungen | Formular zur Informationsanfrage')
                    ->with([
                        'title'      => $this->title,
                        'nameSurname'=> $this->nameSurname,
                        'phone'      => $this->phone,
                        'email'      => $this->email,
                        'city'       => $this->city,
                        'country'    => $this->country,
                        'stationType'=> $this->stationType,
                        'description'=> $this->description,
                    ]);
    }
}
