<?php

namespace App\Http\Controllers;

use App\Models\Riad;
use Illuminate\Http\Request;

class RiadController extends Controller
{

    public function index()
    {
        //select tous les hotels 
        $hotel= Riad::paginate(4);
        return view("admin.hotel.Hotels",["hotels" => $hotel]);
    }


    public function hotelView()
    {
        //
        $hotel=Riad::orderBy('id', 'DESC')->get();
        return view("user.plan.hotels",["hotels" => $hotel]);

    }

    public function showHotel($id)
    {
        //
        $hotel= Riad::find($id);
        return view('user.plan.hotelDetails',["hotelDetails"=>$hotel]);

    }

    public function store(Request $request)
    {
        //insertion des hotel
        $hotel = new Riad();

        $hotel -> hotelName = $request -> name;
        $hotel -> hotelAdresse =  $request -> adresse;
        $hotel -> hotelDescription =  $request -> description;
        $hotel -> phone =  $request -> phone;

        $file = $request->photoPrincipal;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . ".".$ext ;
        $filepath ="storage/public/";
        $file->move($filepath,$filename);
        $hotel->photoPrincipal = $filepath.$filename;

        $hotel ->save();
        return redirect("AdminHotel")->with('hotel','hotel are inserted');
    }

    public function showPhotos($id)
    {
        //
        $hotel = Riad::find($id);
        return view('admin.hotel.photo.hotelsPhotos',["hotel"=>$hotel]);
    }

    public  function ShowChambres($id)
    {
        //
        $hotel = Riad::find($id);
        return view('admin.hotel.chambre.chambreHotel',["hotelCh"=>$hotel]);
    }

    public function edit($id)
    {
        //
        $hotel = Riad::find($id);
        return view('admin.hotel.editHotel',["hotel"=>$hotel]);

    }

    public function update(Request $request,$id)
    {
        //
        $hotel = Riad::find($id);

        $hotel -> hotelName = $request -> name;
        $hotel -> hotelAdresse =  $request -> adresse;
        $hotel -> hotelDescription =  $request -> description;
        $hotel -> phone =  $request -> phone;
        
        $file = $request->photoPrincipal;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . ".".$ext ;
        $filepath ="storage/public/";
        $file->move($filepath,$filename);
        $hotel->photoPrincipal = $filepath.$filename;

        $hotel -> save();
        return redirect("AdminHotel")->with('edithotel','your modification are saved');
    }

    public function destroy($id)
    {
        //supression de l'hotel
        Riad::destroy($id);
        return redirect("AdminHotel")->with('dlthotel','hotel are deleted');
    }
}
