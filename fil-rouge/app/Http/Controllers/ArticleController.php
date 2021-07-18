<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        //
        $article= article::All();
        return view('admin.blog.article',["articles"=>$article]);

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

    public function show(article $id)
    {
        //
        $article = article::find($id);
        return view('admin.preview',["article"=>$article]);
        

    }

    public function edit($id)
    {
        //
        $article = article::find($id);
        return view('admin.blog.editArticle',["article"=>$article]);
    }

    public function update(Request $request, article $id)
    {
        //
        $article =article::find($id);
        $article -> author = $request -> author;


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
