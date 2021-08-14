<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        //affichage des articles dans la partie admin
        $article= Article::paginate(4);
        return view('admin.blog.article',["articles"=>$article]);

    }

    public function blog()
    {
        //affichage des articles dans la partie user&clien
        $article= article::orderBy('id', 'DESC')->get();
        return view('user.blog',["articles"=>$article]);

    }

    public function create()
    {
        //la page de creation des articles
        return view("admin.blog.createArticle");
    }

    public function store(Request $request)
    {
        //insertion des articles dans la DB
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
        return redirect("article")->with('article','article are inserted');

    }

    public function show($id)
    {
        //affichage d'un seul article
        $article = article::find($id);

        return view('user.showArticle',["article"=>$article]);
    }

    public function showComment($id)
    {
        //affichage des commentaire pour admin 
        $article = article::find($id);
        return view('admin.blog.comment',["article"=>$article]);

    }

    public function edit($id)
    {
        //modification les article
        $article = article::find($id);
        return view('admin.blog.editArticle',["article"=>$article]);
    }

    public function update(Request $request, $id)
    {
        //update de contenu des articles
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

        return redirect("article")->with('editarticle','modification are saved');
    }

    public function destroy($id)
    {
        //suppression des articles
        article::destroy($id);
        return redirect("article")->with('dltarticle','article are deleted');
    }
}
