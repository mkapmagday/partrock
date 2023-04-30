<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function index()
    {
        $testMailData = [
            'title' => 'Test Email From AllPHPTricks.com',
            'body' => 'This is the body of test email.'
        ];

        Mail::to('mkapmagday@tip.edu.ph')->send(new SendMail($testMailData));

        dd('Success! Email has been sent successfully.');
    }
}