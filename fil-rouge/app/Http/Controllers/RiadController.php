<?php

namespace App\Http\Controllers;

use App\Models\Riad;
use Illuminate\Http\Request;

class RiadController extends Controller
{

    public function index()
    {
        //select tous les hotels 
        $hotel= Riad::All();
        return view("admin.hotel.Hotels",["hotels" => $hotel]);
    }

    

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //insertion des hotel
        $hotel = new Riad();

        $hotel -> hotelName = $request -> name;
        $hotel -> hotelAdresse =  $request -> adresse;
        $hotel -> hotelDescription =  $request -> description;

        $file = $request->photoPrincipal;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . ".".$ext ;
        $filepath ="storage/public/";
        $file->move($filepath,$filename);
        $hotel->photoPrincipal = $filepath.$filename;

        $hotel ->save();
        return redirect("AdminHotel");
    }

    public function show($id)
    {
        //
        $hotel = Riad::find($id);
        return view('admin.hotel.hotelsPhotos',["hotel"=>$hotel]);
    }

    public function edit($id)
    {
        //


    }

    public function update(Request $request,$id)
    {
        //
        $hotel = Riad::find($id);

        $hotel -> hotelName = $request -> name;
        $hotel -> hotelAdresse =  $request -> adresse;
        $hotel -> hotelDescription =  $request -> description;
        
        $file = $request->photoPrincipal;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . ".".$ext ;
        $filepath ="storage/public/";
        $file->move($filepath,$filename);
        $hotel->photoPrincipal = $filepath.$filename;

        $hotel -> save();
        return redirect("AdminHotel");
    }

    public function destroy($id)
    {
        //
        Riad::destroy($id);

        return redirect("AdminHotel");
    }
}
