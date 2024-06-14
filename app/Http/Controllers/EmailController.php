<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $name = 'John Doe';
        Mail::to('destinataire@example.com')->send(new MyEmail($name));
        return "Email envoyé avec succès";
    }
}
