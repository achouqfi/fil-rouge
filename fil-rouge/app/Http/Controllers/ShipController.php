<?php

namespace App\Http\Controllers;

use App\Models\ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.ship');
    }

    public function admin()
    {
        //
        $ship= ship::All();
        return view("admin.ship",["ship" => $ship]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $shap = new ship();
        $shap -> category = $request -> category;
        $shap -> color =  $request -> color;
        $shap -> rocker =  $request -> rocker;
        $shap -> typeOfWave =  $request -> typeOfWave;
        $shap -> lenght =  $request -> lenght;
        $shap -> width =  $request -> width;
        $shap -> thickness =  $request -> thickness;
        $shap -> MoreDetails =  $request -> MoreDetails;
        $shap -> users_id = auth::user() -> id;

        $shap ->save();
        return redirect("ship");
    }

    public function show()
    {
        //
    }

    public function edit(ship $ship)
    {
        //
    }

    public function update(Request $request, ship $ship)
    {
        //
    }

    public function destroy(ship $ship)
    {
        //
    }
}
