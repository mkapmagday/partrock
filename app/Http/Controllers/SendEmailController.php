<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sendEmail(Request $request)
    {
        $email = 'partrock.services@gmail.com';
    
        // Sanitize user input using urlencode()
        $name = urlencode($request->name);
        $email2 = urlencode($request->email);
        $pnum = urlencode($request->phone);
        $message = urlencode($request->message);
    
        // Build the email message
        $details=[
            'greeting' => 'Hi! This email is about the inquiries from your website partROCK',
            'name' => 'Name: '.$name,
            'email' => 'Email: '.$email2,
            'pnum' => 'Phone Number: '.$pnum,
            'message' =>'Message: '.$message,
        ];
    
        // Send the email
        $notification = new SendEmailNotification($details);
        Notification::route('mail', $email)->notify($notification);
    
        // Return a response
        $response = response()->json(['message' => 'Email sent successfully']);
        return view('welcome',compact('response'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
