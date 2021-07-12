<?php

namespace App\Http\Controllers;

use App\Models\contact;
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
        $contact= contact::All();
        return view("admin.contact",["contact" => $contact]);
    }

    public function store(Request $request)
    {
        //
        $contact = new contact();
        $contact -> name = $request -> name;
        $contact -> prenom =  $request -> email;
        $contact -> email =  $request -> phone;
        $contact -> message =  $request -> message;

        $contact ->save();
        return redirect("contact");
    }

    public function show(contact $contact)
    {
        //
    }

    
    public function edit(contact $contact)
    {
        //
    }

    public function update(Request $request, contact $contact)
    {
        //
    }

    public function destroy(contact $contact)
    {
        //
    }
}
