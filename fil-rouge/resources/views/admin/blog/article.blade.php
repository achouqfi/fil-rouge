@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row ">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>titre</th>
            <th>text</th>
            <th>photo</th>
            <th>date de publication</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    {{-- @foreach ($articles as $article)
        <tr>
            <td> {{ $article->id }}</td>
            <td> {{ $article->titre}}</td>
            <td> {{ $article->text }}</td>
            <td> {{ $article->photo }}</td>
            <td> {{ $article->created_at }}</td>
            <td>
                <form action="{{ url('article/'.$article->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach --}}
    </table>
    </div>
</div>
@endsection