<?php

namespace App\Http\Controllers;

use App\Models\Shap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ShapController extends Controller
{
    public function index()
    {
        //
        
        return view('user.ship');
    }

    public function admin()
    {
        //
        $ship= Shap::All();
        return view("admin.ship",["ship" => $ship]);
        
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $shap = new Shap();
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

    public function edit( )
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy( $id)
    {
        //
        // $ship =ship::find($ship);
        Shap::destroy($id);

        return redirect("/shipadmin");
    }
}
