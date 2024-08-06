<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Carriere;

class MailController extends Controller
{
    public $mailTo = 'berkayozenel1@gmail.com';
    
    public function sendMailCareer(Request $request)
    {
        $name = $request -> name;
        $surname = $request -> surname;
        $phone = $request -> phone;
        $email = $request -> email;
        $cv_writing = $request -> cv_writing;

        Mail::to($this->mailTo)->send(new Carriere($name,$surname,$phone,$email,$cv_writing));

        return response()->json(['success' => true, 'message' =>'Mail gönderimi başarılı!']);
    }
}
