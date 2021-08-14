@extends('layoutUser.navbarFooter')

@section('navbar')
    <a href="/" class="nav-item nav-link font-weight-bold " >Accueil</a>
    <a href="/about" class="nav-item nav-link font-weight-bold ">About</a>			
    <a href="/ship" class="nav-item nav-link font-weight-bold ">Shap</a>
    <a href="/plan" class="nav-item nav-link font-weight-bold ">Hotel</a>
    <a href="/blog" class="nav-item nav-link font-weight-bold active">Blog</a>
    <a href="/contact" class="nav-item nav-link font-weight-bold ">Contact</a>
@endsection

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
            <div class="col-12 col-sm-6 col-md-4 image-grid-item">
              <div style="background-image: url({{url($article->photo)}});" class="image-grid-cover">
                <a href="{{ url('article/'.$article->id.'/show') }}" class="cover-wrapper">{!! Str::limit($article->title,50) !!}</a>
              </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection