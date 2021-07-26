@extends('layoutUser.navbarFooter')

@section('content')
<section>

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

    <div class="trip">
        <h2>Blog </h2> 
        <div class="line"></div>
    </div>

    <div class="container">
        <img src="{{ asset($article->photo) }}" class="img-fluid"  width="80%">
        <h3>{{ $article->title }}</h3>
        <div style="width: 90%">
            {!! $article->text !!}
        </div>
    </div>

    <div class="container">
        <div class="row bootstrap snippets bootdeys">
            <div class="col-md-8 col-sm-12">
                <div class="comment-wrapper">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Comment panel
                        </div>
                        <div class="panel-body">
                            @auth 
                                @if (\Auth::user()->is_admin == 0)
                                    <form action="{{ url('comment/save') }}" method="POST"  enctype="multipart/form-data">
                                        <input type="hidden" value="{{ $article->id }}" name="article" >
                                        @csrf
                                        <h4>Donner un commentaire</h4>
                                        <textarea class="form-control" name="commentaire" placeholder="Enter your comment"></textarea>
                                        <br>
                                        <button type="submit" name="submit" class="btn btn-info pull-right">Post</button>
                                        {{-- <input type="submit" name="submit"  class="btn btn-info pull-right" value="Post" /> --}}

                                        <div class="clearfix"></div>
                                    </form>
                                @elseif (\Auth::user()->is_admin == 1)
                                    <h3>this is comment list</h3>
                                @else
                                    <button class="btn btn-">connectez-vous</button>
                                @endif 
                            @endauth

                            <hr>
                            <ul class="media-list">
                                @foreach($article->comments as $comment)
                                <li class="media">
                                    <div class="media-body">
                                        {{-- <strong class="text-muted">{{ $comment->message }}</strong> --}}
                                        <span></span>
                                        <span class="text-muted pull-right">
                                            <small class="text-muted">{{ $comment->created_at }}</small>
                                        </span>
                                        <strong class="text-success">{{ $comment->user->name }}</strong>
                                        <p>
                                            {{ $comment->message }}
                                             @auth
                                            @if ($comment->user_id === Auth::user()->id)
                                            <div class="panel-body">
                                                <form action="{{ url('commentDlt/'.$comment->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div>
                                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                                    </div>
                                                </form>
                                            </div>
                                            @endif
                                            @endauth
                                        </p>

                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection