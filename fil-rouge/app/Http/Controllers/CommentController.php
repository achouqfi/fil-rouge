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

    public function store($request,$id)
    {
        dd(print_r("im in store controller"));

        //
        $comment = new Comment();
        // $article = article::find($id);

        $comment -> message = $request -> commentaire;
        $comment -> users_id = auth::user() -> id;
        $comment-> article_id =article::find($id);
        $comment ->save();

        return redirect("/article");

    }

    public function show($id)
    {
        //
        $articleId = article::find($id);
        return view('user.showArticle',["articleId"=>$articleId]);

    }

    public function edit()
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
