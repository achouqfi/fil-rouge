@auth
@if (Auth::user()->is_admin === 1)

@extends('layouts.sidebar')

@section('content')

    <div class="container">
        <div class="table-responsive"  style="width: 110%;margin-left:-5%">
            @if (session('article'))
            <div class="alert alert-success">{{ session('article') }}</div>            
            @endif
            @if (session('dltarticle'))
            <div class="alert alert-success">{{ session('dltarticle') }}</div>            
            @endif
            @if (session('editarticle'))
            <div class="alert alert-success">{{ session('editarticle') }}</div>            
            @endif
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Article LIST</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/article/create" class="btn btn-success" >Add Article</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Photo</th>
                            <th>Comments</th>
                            <th>Date de publication</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($articles as $article)
                        <tr>
                            <td> {{ $article->id }}</td>
                            <td> {{ $article->title}}</td>
                            <td><img  src="{{ asset($article->photo) }}" height="40px" width="50px"/></td>
                            <td><a href="{{ url('comment/'.$article->id.'/shomAdmin') }}" class="btn btn-info">Comments</a></td>
                            <td> {{ $article->created_at }}</td>
                            <td class="d-flex">
                                <form action="{{ url('articleDlt/'.$article->id) }}" class="d-flex" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-md">Delete</button>
                                    <a href="{{ url('article/'.$article->id.'/edit') }}" class="btn btn-info btn-md ml-3">Update</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <span>{{ $articles->links( "pagination::bootstrap-4") }}</span>
            </div>
        </div>        
    </div>



@endsection

@endif
@endauth
