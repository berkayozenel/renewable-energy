<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Carriere;
use App\Mail\Kommunikation;
use App\Mail\Solution;
use App\Models\CareerForm;
use App\Models\ContactForm;
use App\Models\SolutionForm;

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

        $career = new CareerForm();
        $career-> sender_name_surname = $name;
        $career-> sender_phone        = $phone;
        $career-> sender_email        = $email;
        $career-> cv_writing          = $cv_writing;
        $result = $career -> save();

        if($result)
        {
            Mail::to($this->mailTo)->send(new Carriere($name,$phone,$email,$cv_writing));

            return response()->json(['success' => true, 'message' =>'Email sending successful!']);
        }
        else{
            return response()->json(['success' => false, 'result' => 'Mail could not be sended!']);
        }
    }

    public function sendMailContact(Request $request)
    {
        $subject     = $request -> subject;
        $nameSurname = $request -> nameSurname;
        $phone       = $request -> phone;
        $email       = $request -> email;
        $description = $request -> description;

        if(!$subject || $subject == 'Bitte wählen Sie ein Thema.'){
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

        $contact = new ContactForm();
        $contact-> subject             = $subject;
        $contact-> sender_name_surname = $nameSurname;
        $contact-> sender_phone        = $phone;
        $contact-> sender_email        = $email;
        $contact-> description          = $description;
        $result = $contact -> save();

        if($result)
        {
            Mail::to($this->mailTo)->send(new Kommunikation($subject,$nameSurname,$phone,$email,$description));

            return response()->json(['success' => true, 'message' =>'Email sending successful!']);
        }
        else{
            return response()->json(['success' => false, 'result' => 'Mail could not be sended!']);
        }
    }

    public function sendMailSolution(Request $request)
    {
        $title       = $request -> title;
        $nameSurname = $request -> nameSurname;
        $phone       = $request -> phone;
        $email       = $request -> email;
        $country     = $request -> country;
        $city        = $request -> city;
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
        if(!$country){
            return response()->json(['success' => false, 'message' => 'Das Land ist erforderlich.']);
        }
        if(!$city){
            return response()->json(['success' => false, 'message' => 'Das Stadt ist erforderlich.']);
        }
        if(!$stationType){
            return response()->json(['success' => false, 'message' => 'Das Stationstyp ist erforderlich.']);
        }
        if(!$description){
            return response()->json(['success' => false, 'message' => 'Das Themenbeschreibung ist erforderlich.']);
        }

        $solution = new SolutionForm();
        $solution-> title               = $title;
        $solution-> sender_name_surname = $nameSurname;
        $solution-> sender_phone        = $phone;
        $solution-> sender_email        = $email;
        $solution-> sender_country      = $country;
        $solution-> sender_city         = $city;
        $solution-> station_type        = $stationType;
        $solution-> description         = $description;
        $result = $solution -> save();

        if($result)
        {
            Mail::to($this->mailTo)->send(new Solution($title,$nameSurname,$phone,$email,$country,$city,$stationType,$description));

            return response()->json(['success' => true, 'message' =>'Email sending successful!']);
        }
        else{
            return response()->json(['success' => false, 'result' => 'Mail could not be sended!']);
        }
    }
}
