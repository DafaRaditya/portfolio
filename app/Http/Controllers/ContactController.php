<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMeil;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'subject' => 'required',
        //     'message' => 'required',
        // ]);

        // Mail::to('dafaraditya964@gmail.com')->send(new ContactFormMeil($request->all()));

        // return redirect()->back()->with('success', 'Email has been sent successfully!');
    }
}
