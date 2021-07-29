<?php

namespace App\Http\Controllers;

use App\Models\PhotoHotel;
use Illuminate\Http\Request;

class PhotoHotelController extends Controller
{

    public function store(Request $request)
    {
        //
        $photo = new PhotoHotel();

        $photo -> riad_id = $request -> hotel_id;
        
        foreach ($request->photos as $file) {
            # code...
            $ext = $file->getClientOriginalExtension();
            $filename = time() . ".".$ext ;
            $filepath ="storage/public/";
            $file->move($filepath,$filename);
            $photo->pathPhoto = $filepath.$filename;
        }
        // $file = $request->photos;


        // foreach($request->photos as $file)
        // {
        //     $name = $file->getClientOriginalName();
        //     $filename=time()."".$name;
        //     $file->move('storage/uploads/', $filename);
        //     Pic::create([
        //         "img"=>$filename,
        //     ]);


        $photo ->save();
        return redirect()->back();
    }


    public function show(PhotoHotel $photoHotel)
    {
        //
    }

    public function destroy($id)
    {
        //
        PhotoHotel::destroy($id);

        return redirect()->back();
    }
}
