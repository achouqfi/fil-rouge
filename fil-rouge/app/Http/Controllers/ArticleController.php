<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        //
        return view('admin.blog.article');

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

        // insert photo
        $photo = $request->photo;
        $ext = $photo->getClientOriginalExtension();
        $filename = time() . ".".$ext ;
        $filepath = "storage/images/";
        $photo->move($filepath,$filename);
        $article->photo = $filepath.$filename;




        $article ->save();
        // return redirect("article");

    }

    public function show(article $id)
    {
        //
        $article = article::find($id);
        return view('admin.preview',["article"=>$article]);
        

    }

    public function edit(article $id)
    {
        //
        $article = article::find($id);
        return view('admin.editArticle.',["article"=>$article]);
    }

    public function update(Request $request, article $id)
    {
        //
        $article =article::find($id);
        $article -> author = $request -> author;


        $article ->save();

        return redirect("article");
    }

    public function destroy(article $id)
    {
        //
        $article =article::find($id);
        $article->destroy();

        return redirect("article");
    }
}
