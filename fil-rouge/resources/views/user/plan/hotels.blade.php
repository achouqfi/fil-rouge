@extends('layoutUser.navbarFooter')

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
    </div>

@endsection