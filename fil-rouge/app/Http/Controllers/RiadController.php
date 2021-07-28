<?php

namespace App\Http\Controllers;

use App\Models\Riad;
use Illuminate\Http\Request;

class RiadController extends Controller
{

    public function index()
    {
        //
        $hotel= Riad::All();

        return view("admin.hotel.Hotels",["hotels" => $hotel]);
        // return view("admin.hotel.Hotels");
    }

    

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $hotel = new Riad();

        $hotel -> hotelName = $request -> name;
        $hotel -> hotelAdresse =  $request -> adresse;
        $hotel -> hotelDescription =  $request -> description;

        $hotel ->save();
        return redirect("AdminHotel");
    }

    public function show(Riad $riad)
    {
        //
    }

    public function edit($id)
    {
        //
        $hotel = Riad::find($id);
        return view('admin.hotel.Hotels',["editHotel"=>$hotel]);

    }

    public function update(Request $request,$id)
    {
        //
        $hotel = Riad::find($id);

        $hotel -> hotelName = $request -> name;
        $hotel -> hotelAdresse =  $request -> adresse;
        $hotel -> hotelDescription =  $request -> description;

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
