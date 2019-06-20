<?php

namespace App\Http\Controllers;
use App\Mail\HireMessage;
use App\User;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
        public function store(Request $request)
    {

        // Validate Form
        $this->validate($request, [
            'name' => 'required|max:50',
            'company' => 'required|max:50',
            'subject' => 'required|max:50',
            'email' => 'required|email',
            'type' => 'required',
            'message' => 'required|max:2000',
        ]);
        
        // Create Email Content
        $name = $request->input('message');
        $company = $request->input('company');
        $title = $request->input('title');
        $type = $request->input('type');
        $message = $request->input('message');

        // Send Email
        \Mail::send('emails.HireMessage', [
            'company' => $company,
            'type' => $type,
            'message' => $message
        ], function ($mail) use ($request){
            $mail->from($email, $name);
            $mail->to(User::find(1))->subject($title);
        });

        return redirect()->back()->with('flash_message', 'Thank you for your message!');
    }
}
