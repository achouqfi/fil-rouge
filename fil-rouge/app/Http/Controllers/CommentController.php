<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\article;


class CommentController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //

    }


    public function store(Request $request)
    {
        //
        $shap = new Comment();
        $shap -> category = $request -> category;
        $shap -> color =  $request -> color;
        $shap -> rocker =  $request -> rocker;
        $shap -> typeOfWave =  $request -> typeOfWave;
        $shap -> lenght =  $request -> lenght;
        $shap -> width =  $request -> width;
        $shap -> thickness =  $request -> thickness;
        $shap -> MoreDetails =  $request -> MoreDetails;
        $shap -> users_id = auth::user()-> id;
        $shap -> articles_id = article::article()-> article;

        $shap ->save();
        return redirect("ship");

    }

    public function show(Comment $comment)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
