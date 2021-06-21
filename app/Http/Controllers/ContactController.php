<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller 
{
    public function contacts() 
    {
        $contacts = Contact::all();
        return view('contacts.index',compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $contact = Contact::create([
            'user_id' => $request->user_id,
            'address_id' => $request->address_id,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return redirect()->route('contacts.index')->with('message','Contact enregistré !');
    }
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show',compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit',compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update([
            'user_id' => $request->user_id,
            'address_id' => $request->address_id,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return redirect()->route('contacts.index')->with('message','Contact modifié !');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('message','Contact suprimé !');
    }
}