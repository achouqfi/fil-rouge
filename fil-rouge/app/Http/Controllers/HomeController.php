<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use App\Models\Shap;
use App\Models\Riad;
use App\Models\Comment;



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

    public function user(){
        $users= User::All();
        return view("admin.users",["users" => $users]);
    }
    
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



    public function DltUser($id)
    {
        //
        User::destroy($id);
        return redirect()->back()->with('dltuser','user account are deleted');
    }
}
