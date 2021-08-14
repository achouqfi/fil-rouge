<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function index()
    {
        //affichage des emails dans la partie admin
        $newsletter= Newsletter::orderBy('id', 'DESC')->paginate(7);
        return view("admin.newsletter",["newsletters" => $newsletter]);
    }


    public function store(Request $request)
    {
        //insertion des emails dans la DB
        $newsletter = new Newsletter();
        $newsletter -> email = $request -> email;

        $newsletter ->save();
        return redirect()->back()->with('message', 'email envoyer');
    }

    public function destroy($id)
    {
        //suppression des emails
        Newsletter::destroy($id);
        return redirect()->back()->with('dltEmail','Email are deleted');
    }
}
