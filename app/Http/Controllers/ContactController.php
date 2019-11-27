<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255|min:10',
            'email' => 'required|email',
            'phone' => 'required|min:11|numeric',
            'body' => 'required|max:255|min:10',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->body = $request->body;
        $contact->save();
        return redirect()->back()->with('insertContact', 'تم ارسال الرساله بنجاح');


    }
}
