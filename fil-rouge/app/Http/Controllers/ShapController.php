<?php

namespace App\Http\Controllers;

use App\Models\Shap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ShapController extends Controller
{
    public function index()
    {
        //affichage au utilisateur
        return view('user.ship');
    }

    public function admin()
    {
        //affichage des commande pour dans la page admin
        $ship= Shap::All();
        return view("admin.ship",["ship" => $ship]);  
    }

    public function store(Request $request)
    {
        // insertion du commande
        $shap = new Shap();
        $shap -> category = $request -> category;
        $shap -> color =  $request -> color;
        $shap -> rocker =  $request -> rocker;
        $shap -> typeOfWave =  $request -> typeOfWave;
        $shap -> lenght =  $request -> lenght;
        $shap -> Phone =  $request -> Phone;
        $shap -> Adresse =  $request -> Adresse;
        $shap -> postcode =  $request -> postcode;
        $shap -> etat =  $request -> etat;
        $shap -> width =  $request -> width;
        $shap -> thickness =  $request -> thickness;
        $shap -> MoreDetails =  $request -> MoreDetails;
        $shap -> user_id = auth::user() -> id;

        $shap ->save();
        return redirect("ship")->with('order','commande envoyer');
    }

    public function destroy( $id)
    {
        //supression du commande
        Shap::destroy($id);
        return redirect()->back()->with('dltorder','order are deleted');
    }
}
