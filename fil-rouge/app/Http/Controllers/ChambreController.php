<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{

    public function showChambre($id)
    {
        $chambre = Chambre::find($id);
        return view("admin.hotel.Hotels",["chambre" => $chambre]);
    }

    public function store(Request $request)
    {
        //
        $chambre = new Chambre();

        $chambre -> riad_id = $request -> hotel_id;
        $chambre -> housingType = $request -> type;
        $chambre -> for = $request -> for;
        $chambre -> price = $request -> tarif;
        $chambre -> option = $request -> option;

        $chambre -> save();
        return redirect()->back();
    }

    public function edit($id)
    {
        //
        $chambre = Chambre::find($id);
        return view('admin.hotel.chambre.editChambre',["chambre"=>$chambre]);

    }

    public function update(Request $request, $id)
    {
        //
        $chambre = Chambre::find($id);

        $chambre -> riad_id = $request -> hotel_id;
        $chambre -> housingType = $request -> type;
        $chambre -> for = $request -> for;
        $chambre -> price = $request -> tarif;
        $chambre -> option = $request -> option;

        $chambre -> save();
        return redirect("AdminChambreHotel/".$request -> hotel_id)->with('editchambre','your modification are saved');
    }

    public function destroy($id)
    {
        //
        Chambre::destroy($id);

        return redirect()->back();
    }
}
