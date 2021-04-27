<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request){
        request()->validate([
            "name" => ["required"],
            "email" => ["required", "email"],
            "subject" => ["required"],
            "message" => ["required"],
        ]);
        $mails = new Mail();
        $mails->name = $request->name;
        $mails->email = $request->email;
        $mails->subject = $request->subject;
        $mails->message = $request->message;
        $mails->save();
        return redirect('/' . '#contact');
    }
}
