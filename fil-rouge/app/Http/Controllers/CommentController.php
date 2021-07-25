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

    public function create( Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        //insertion des commentaires
        $comment = new Comment();

        $comment -> message = $request -> commentaire;
        $comment -> users_id = auth::user() -> id;
        $comment-> article_id =$request -> article;
        $comment ->save();

        return redirect("/blog");

    }

    public function show(Request $request)
    {
        //

    }

    public function edit(Request $request)
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
