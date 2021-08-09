<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Contact;
use App\Models\User;
use App\Models\Shap;
use Illuminate\Support\Facades\Hash;
use App\Models\Comment;
use App\Models\Riad;



class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // fonction pour la page user & admin dans la partie front office
    public function index(){
        $ship= Shap::All();
        $comment= Comment::All();
        $user = User::All();
        $contact= Contact::All();

        //commande count
        $ShipCount = count($ship);

        //users count
        $userCount = count($user);

        //contact count
        $contactCount = count($contact);

        //comment count
        $commentCount = count($comment);

        return view('Home',["ships"=>$ship,"comments"=>$comment,"contactCount" => $contactCount,"ShipCount" => $ShipCount,"userCount" => $userCount,"CommentCount" => $commentCount]);
    }

    // fonction pour le tableau users dans la partie back office
    public function user(){
        $users= User::All();
        return view("admin.users",["users" => $users]);
    }
    
    // fonction pour page home dans la partie back office
    public function adminHome()
    {
        //ship count
        $ship= Shap::All();
        $ShipCount = count($ship);

        //users count
        $users= User::All();
        $userCount = count($users);

        //contact count
        $contact= Contact::All();
        $contactCount = count($contact);

        //comment count
        $comment= Comment::All();
        $commentCount = count($comment);

        
        return view('admin.homeAdmin',["contactCount" => $contactCount,"ShipCount" => $ShipCount,"userCount" => $userCount,"CommentCount" => $commentCount]);
    }


    // fonction pour la page de modification de mode de passe dans la partie front office
    public function changePassword()
    {
        // $user = User::Find($id);
        return view('user.ChangePassword');
    }


    // fonction de de modification de mode de passe dans la partie front office
    public function store(Request $request)
    {
        //validation des données
        $request->validate([
            'current_password' => "required|string",
            'new_password' =>"required|string|min:8",
            'password' =>'required|string|min:8',
            
        ]);

        if($request->new_password == $request ->password){
        $current_user=auth()->user();
        $user = User::find($current_user->id) ;
        if(Hash::check($request->current_password,$current_user->password))
        {
            $user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('success','mode de passe est changer');

        }else{
            return redirect()->back()->with('','');
        }
        }
        else{
        return redirect()->back()->with('','');
        }  
    }


    // fonction pour la suppression des utilisateurs dans la partie back office
    public function DltUser($id)
    {
        //m
        User::destroy($id);
        return redirect()->back()->with('dltuser','user account are deleted');
    }

    // fonction pour la page de home de mode de passe dans la partie front office
    public function homePage()
    {
        //last 3 id in page home
        $hotel = Riad::orderBy('id', 'DESC')->take(4)->get();
    
        return view('user.home',["hotels" => $hotel]);
    }
}
