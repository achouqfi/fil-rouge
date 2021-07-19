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
    <form action="{{ url('comment/save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="comments">
            <h4>Donner un commentaire</h4>
            <input type="text" name="commentaire" placeholder="Email">
            <a class="btn btn-primary btn-outline" href="#">envoyer</a>
        </div>
    </form>
@endsection