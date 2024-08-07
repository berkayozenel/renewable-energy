<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Carriere;
use App\Mail\Kommunikation;
use App\Mail\Solution;

class MailController extends Controller
{
    public $mailTo = 'berkayozenel1@gmail.com';
    
    public function sendMailCareer(Request $request)
    {
        $name       = $request -> name;
        $phone      = $request -> phone;
        $email      = $request -> email;
        $cv_writing = $request -> cv_writing;
        
        if(!$name){
            return response()->json(['success' => false, 'message' => 'Das Namensfeld und Nachnamenfeld ist erforderlich.']);
        }
        if(!$phone){
            return response()->json(['success' => false, 'message' => 'Das Telefonfeld ist erforderlich.']);
        }
        if(!$email){
            return response()->json(['success' => false, 'message' => 'Das E-Mail-Feld ist erforderlich.']);
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['success'=>false, 'error' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.']);
        }
        if(!$cv_writing){
            return response()->json(['success' => false, 'message' => 'Das Lebenslauf ist erforderlich.']);
        }

        Mail::to($this->mailTo)->send(new Carriere($name,$phone,$email,$cv_writing));

        return response()->json(['success' => true, 'message' =>'Email sending successful!']);
    }

    public function sendMailContact(Request $request)
    {
        $subject     = $request -> subject;
        $nameSurname = $request -> nameSurname;
        $phone       = $request -> phone;
        $email       = $request -> email;
        $description = $request -> description;

        if(!$subject){
            return response()->json(['success' => false, 'message' => 'Das Kommunikationsthema ist erforderlich.']);
        }
        if(!$nameSurname){
            return response()->json(['success' => false, 'message' => 'Das Namensfeld und Nachnamenfeld ist erforderlich.']);
        }
        if(!$phone){
            return response()->json(['success' => false, 'message' => 'Das Telefonfeld ist erforderlich.']);
        }
        if(!$email){
            return response()->json(['success' => false, 'message' => 'Das E-Mail-Feld ist erforderlich.']);
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['success'=>false, 'error' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.']);
        }
        if(!$description){
            return response()->json(['success' => false, 'message' => 'Das Themenbeschreibung ist erforderlich.']);
        }

        Mail::to($this->mailTo)->send(new Kommunikation($subject,$nameSurname,$phone,$email,$description));

        return response()->json(['success' => true, 'message' => 'Email sending successful!']);
    }

    public function sendMailSolution(Request $request)
    {
        $title       = $request -> title;
        $nameSurname = $request -> nameSurname;
        $phone       = $request -> phone;
        $email       = $request -> email;
        $city        = $request -> city;
        $district    = $request -> district;
        $stationType = $request -> stationType;
        $description = $request -> description;

        if(!$title){
            return response()->json(['success' => false, 'message' => 'Das Titel ist erforderlich.']);
        }
        if(!$nameSurname){
            return response()->json(['success' => false, 'message' => 'Das Namensfeld und Nachnamenfeld ist erforderlich.']);
        }
        if(!$phone){
            return response()->json(['success' => false, 'message' => 'Das Telefonfeld ist erforderlich.']);
        }
        if(!$email){
            return response()->json(['success' => false, 'message' => 'Das E-Mail-Feld ist erforderlich.']);
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['success'=>false, 'error' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.']);
        }
        if(!$city){
            return response()->json(['success' => false, 'message' => 'Das Stadt ist erforderlich.']);
        }
        if(!$district){
            return response()->json(['success' => false, 'message' => 'Das Bezirk ist erforderlich.']);
        }
        if(!$stationType){
            return response()->json(['success' => false, 'message' => 'Das Stationstyp ist erforderlich.']);
        }
        if(!$description){
            return response()->json(['success' => false, 'message' => 'Das Themenbeschreibung ist erforderlich.']);
        }

        Mail::to($this->mailTo)->send(new Solution($title,$nameSurname,$phone,$email,$city,$district,$stationType,$description));

        return response()->json(['success' => true, 'message' => 'Email sending successful!']);
    }
}
