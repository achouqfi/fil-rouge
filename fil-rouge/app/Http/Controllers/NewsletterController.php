<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function index()
    {
        //
        $newsletter= Newsletter::orderBy('id', 'DESC')->paginate(7);
        return view("admin.newsletter",["newsletters" => $newsletter]);
    }


    public function store(Request $request)
    {
        // 
        $newsletter = new Newsletter();
        $newsletter -> email = $request -> email;

        $newsletter ->save();
        return redirect()->back()->with('message', 'email envoyer');
    }

    public function destroy($id)
    {
        //
        Newsletter::destroy($id);
        return redirect()->back()->with('dltEmail','Email are deleted');
    }
}
