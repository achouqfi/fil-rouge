<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use App\Models\Shap;
use Illuminate\Support\Facades\Hash;
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

    public function changePassword($id)
    {
        $user = User::Find($id);
        return view('user.ChangePassword',$user);
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new User],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password change successfully.');
    }


    public function DltUser($id)
    {
        //
        User::destroy($id);
        return redirect()->back()->with('dltuser','user account are deleted');
    }
}
