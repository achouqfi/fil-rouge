<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        //
        $article= Article::All();
        return view('admin.blog.article',["articles"=>$article]);

    }

    public function blog()
    {
        //
        $article= article::All();
        // $comment= Comment::All();


        return view('user.blog',["articles"=>$article]);

    }

    public function create()
    {
        //
        return view("admin.blog.createArticle");
    }

    public function store(Request $request)
    {
        //
        $article = new article();
        $article -> title = $request -> titre;
        $article -> text = $request -> article;

        $file = $request->photo;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . ".".$ext ;
        $filepath ="storage/public/";
        $file->move($filepath,$filename);
        $article->photo = $filepath.$filename;

        $article ->save();
        return redirect("article");

    }

    public function show($id)
    {
        //
        $article = article::find($id);

        return view('user.showArticle',["article"=>$article]);
    }

    public function showComment($id)
    {
        $article = article::find($id);
        return view('admin.blog.comment',["article"=>$article]);

    }

    public function edit($id)
    {
        //
        $article = article::find($id);

        return view('admin.blog.editArticle',["article"=>$article]);
    }

    public function update(Request $request, $id)
    {
        //
        $article =article::find($id);
        
        $article -> title = $request -> titre;
        $article -> text = $request -> article;

        $file = $request->photo;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . ".".$ext ;
        $filepath ="storage/public/";
        $file->move($filepath,$filename);
        $article->photo = $filepath.$filename;

        $article ->save();

        return redirect("article");
    }

    public function destroy($id)
    {
        //
        article::destroy($id);


        return redirect("article");
    }
}
