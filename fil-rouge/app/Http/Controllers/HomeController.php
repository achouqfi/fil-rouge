<?php

namespace App\Http\Controllers;
use App\Models\ship;
use App\Models\contact;
use App\Models\User;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('Home');
    }

    public function user(){
        $users= user::All();
        return view("admin.users",["users" => $users]);
    }

    public function adminHome()
    {
        $ship= ship::All();
        $ShipCount = count($ship);

        $users= user::All();
        $userCount = count($users);

        $contact= contact::All();
        $contactCount = count($contact);
        return view('admin.homeAdmin',["contactCount" => $contactCount,"ShipCount" => $ShipCount,"userCount" => $userCount]);
    }
}
