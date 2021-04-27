<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit(Contact $id) {
        $contact = $id;
        return view('admin.contact.contactEdit', compact('contact'));
    }
    public function update(Contact $id, Request $request) {
        request()->validate([
            "location" => ["required"],
            "email" => ["required", "email"],
            "phone" => ["required", "numeric", "min:100000000", "max:999999999"],
            "iframe" => ["required"],
        ]);
        $contact = $id;
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->iframe = $request->iframe;
        $contact->save();
        return redirect('/admin' . $contact->$id)->with('success', 'Modifications enregistrées');
    }
}
