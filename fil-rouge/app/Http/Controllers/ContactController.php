<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }

    public function admin()
    {
        //
        $contact= Contact::paginate(7);
        return view("admin.contact",["contacts" => $contact]);
    }

    public function store(Request $request)
    {
        //
        $contact = new Contact();
        $contact -> name = $request -> name;
        $contact -> prenom =  $request -> email;
        $contact -> email =  $request -> phone;
        $contact -> message =  $request -> message;

        $contact ->save();
        return redirect()->back()->with('message', 'Message envoyer');
    }

    public function destroy($id)
    {
        //
        $contact = Contact::find($id);
        $contact->delete();
        
        return redirect()->back()->with('dltcontact','message are deleted');
    }
}
