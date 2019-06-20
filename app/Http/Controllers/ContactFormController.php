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
            'email' => 'required|email',
            'type' => 'required',
            'message' => 'required|max:2000',
        ]);

        if(count($errors) > 0){
            return 'hello';
        }

        
        // Create Email Content
        $name = $request->input('name');
        $company = $request->input('company');
        $type = $request->input('type');
        $email = $request->input('email');
        $message = $request->input('message');
        $content = array(
            'company' => $company,
            'type' => $type,
            'message' => $message,
            'name' => $name,
            'email' => $email
        );

        // Send Email
        \Mail::to(User::find(1))->send(new HireMessage($content));


        return redirect('home#hire')->with('flash_message', 'Thank you for your message!');
    }
}
