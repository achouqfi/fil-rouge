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
        {!! $article->text !!}
    </div>
    @foreach($article->comments  as $comment)
        <div class="container">
            <div class="row">
                <div class="panel panel-default widget">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <p> {{ $comment->message }}</p>
                                    <div class="mic-info">
                                        By: <p>{{ $comment->id_user }}</p> on 2 Aug 2013
                                    </div>
                                </div>
                                <div class="comment-text">
                                    Awesome design
                                </div>
                                <div class="action">
                                    <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-pencil">Edit</span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash">Supprimer</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <form action="{{ url('comment/save') }}" method="POST"  enctype="multipart/form-data">
        <input type="hidden" value="{{ $article->id }}" name="article" >
        @csrf
        <h4>Donner un commentaire</h4>
        <input type="text" name="commentaire" placeholder="Email">
        <input type="submit" name="submit" class="btnContact" value="Send Message" />
    </form>
@endsection