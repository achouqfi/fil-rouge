@extends('layoutUser.navbarFooter')

@section('content')
<section>

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

    <div class="trip">
        <h2>Blog </h2> 
        <div class="line"></div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <div class="card-thumbnail">
                        <img src="{{ asset($article->photo) }}" class="img-fluid" alt="">
                    </div>
                    <h3><a href="#" class="mt-2 text-info text-justify">{{ $article->title }} </a></h3>
                    <p class="text-dark">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <a href="{{ url('article/'.$article->id.'/show') }}" class="btn btn-sm btn-info float-right">Read more >></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection