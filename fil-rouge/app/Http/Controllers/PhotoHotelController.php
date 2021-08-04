<?php

namespace App\Http\Controllers;

use App\Models\PhotoHotel;
use Illuminate\Http\Request;

class PhotoHotelController extends Controller
{

    public function store(Request $request)
    {
        //insertion d'ensemble des photos selectionner 
        foreach ($request->file('photos') as $file) {

            $name = time()."".$file->getClientOriginalName();
            $file->move('storage/uploads/', $name);
            $filepath="storage/uploads/".$name;
            PhotoHotel::create([
                "pathPhoto"=>$filepath,
                "riad_id"=>$request->hotel_id
            ]);

        }
        return redirect()->back() ->with('photo', 'Photos are inserted');
    }

    public function destroy($id)
    {
        //suppression d'une image
        PhotoHotel::destroy($id);
        return redirect()->back()->with('dltphoto','photo are deleted');
    }
}
