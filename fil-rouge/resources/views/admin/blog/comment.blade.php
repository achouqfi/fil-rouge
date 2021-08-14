@auth
@if (Auth::user()->is_admin === 1)

@extends('layouts.sidebar')

@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            @if (session('dltcomment'))
            <div class="alert alert-success">{{ session('dltcomment') }}</div>            
            @endif
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>les commentaires de {{ $article->title }}</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/article" class="btn btn-dark"> < Back</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User name</th>
                            <th>Comment</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($article->comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->user->name }}</td>
                            <td>{{ $comment->message }} </td>
                            <td >
                                <form action="{{ url('commentDltDashboard/'.$comment->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-md">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
@endsection

@endif
@endauth