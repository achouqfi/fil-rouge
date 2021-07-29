<?php

namespace App\Http\Controllers;

use App\Models\PhotoHotel;
use Illuminate\Http\Request;

class PhotoHotelController extends Controller
{

    public function store(Request $request)
    {
        //
 
        
        foreach ($request->file('photos') as $file) {
            // $photo = new PhotoHotel();

            // $photo->hotel_id = $request->hotel_id;
            $name = time()."".$file->getClientOriginalName();
            // $filename=time()."".$name;
            $file->move('storage/uploads/', $name);
            $filepath="storage/uploads/".$name;
            PhotoHotel::create([
                "pathPhoto"=>$filepath,
                "riad_id"=>$request->hotel_id
            ]);

        }

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
