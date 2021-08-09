@extends('layoutUser.navbarFooter')

@section('navbar')
    <a href="/" class="nav-item nav-link " >Home</a>
    <a href="/about" class="nav-item nav-link">About</a>			
    <a href="/ship" class="nav-item nav-link ">Ship</a>
    <a href="/plan" class="nav-item nav-link active">Plan</a>
    <a href="/blog" class="nav-item nav-link ">Blog</a>
    <a href="/contact" class="nav-item nav-link ">Contact</a>
@endsection

@section('content')
<section>

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

    <div class="trip">
        <h2>Hotels</h2> 
        <div class="line"></div>
    </div>

    <div class="container Contrip">
        <div class="row ">
            @foreach ($hotels as $hotel)
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset($hotel->photoPrincipal) }}">
                        <div class="card-block">
                            <h4 class="card-title">{{ $hotel->hotelName }}</h4>
                            <div class="card-text">
                                {{ $hotel->hotelAdresse }}
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url('hotelDetails/'.$hotel->id) }}" class="btn btn btn-info btn-md">Book New</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <span >{{ $hotels->links( "pagination::bootstrap-4") }}</span> --}}
    </div>

@endsection