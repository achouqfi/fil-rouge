@extends('layouts.sidebar')

@section('content')
<div class="container">
    <a href="/article/create" class="btn btn-warning"> Add a new article</a>

    <div class="row ">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>titre</th>
            <th>photo</th>
            <th>date de publication</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($articles as $article)
        <tr>
            <td> {{ $article->id }}</td>
            <td> {{ $article->title}}</td>
            <td><img  src="{{ asset($article->photo) }}" height="40px" width="50px"/></td>
            <td> {{ $article->created_at }}</td>
            <td>
                <form action="{{ url('articleDlt/'.$article->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger btn-sm">Supprimer</button>
                    <a href="/review/article" class="btn btn-success btn-sm">Preview</a>
                    <a href="{{ url('article/'.$article->id.'/edit') }}" class="btn btn-info btn-sm">Edit</a>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    </div>
</div>
@endsection


