<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Riad;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homePage()
    {
        //affichege de contenu dans  page home
        $hotel = Riad::orderBy('id', 'DESC')->take(4)->get();
        $article = Article::orderBy('id', 'DESC')->take(3)->get();
    
        return view('user.home',["hotels" => $hotel ,"articles" => $article]);
    }
}
