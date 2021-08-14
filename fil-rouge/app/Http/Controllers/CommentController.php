<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\article;


class CommentController extends Controller
{

    public function store(Request $request)
    {
        //insertion des commentaires dans la DB
        $comment = new Comment();

        $comment -> message = $request -> commentaire;
        $comment -> user_id = auth::user() -> id;
        $comment-> article_id =$request -> article;
        $comment ->save();

        return redirect()->back()->with('comment',"votre commentaire à été inserer");
    }

    public function destroy($id)
    {
        //suppression des commentaires pour utilisateur
        $comment = Comment::find($id);
        $comment->delete();
        
        return redirect()->back()->with('dltcomment','votre commentaire est supprimer');
    }

    public function DltComment($id)
    {
        //suppression des commentaires pour admin
        $comment = Comment::find($id);
        $comment->delete();
        
        return redirect()->back()->with('dltcomment','your comment are deleted');
    }

}
