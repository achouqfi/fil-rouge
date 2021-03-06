<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        //affichage de la page contact pour l'utilisateur
        return view('user.contact');
    }

    public function admin()
    {
        //affichage des messages dans la partie admin
        $contact= Contact::orderBy('id', 'DESC')->paginate(7);
        return view("admin.contact",["contacts" => $contact]);
    }

    public function store(Request $request)
    {
        //insertion des messages dans la DB
        $contact = new Contact();
        $contact -> name = $request -> name;
        $contact -> prenom =  $request -> email;
        $contact -> email =  $request -> phone;
        $contact -> message =  $request -> message;

        $contact ->save();
        return redirect()->back()->with('contact', 'Message envoyer');
    }

    public function destroy($id)
    {
        //suppression des messages
        $contact = Contact::find($id);
        $contact->delete();
        
        return redirect()->back()->with('dltcontact','message are deleted');
    }

}
