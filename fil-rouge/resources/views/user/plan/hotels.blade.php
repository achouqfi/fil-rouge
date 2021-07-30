@extends('layoutUser.navbarFooter')

@section('content')
<section>

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

    <div class="trip">
        <h2>Hotels</h2> 
        <div class="line"></div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($hotels as $hotel)
            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <div class="card-thumbnail">
                        <img src="{{ asset($hotel->photoPrincipal) }}" class="img-fluid" alt="">
                    </div>
                    <h3><a href="#" class="mt-2 text-info text-justify">{{ $hotel->hotelName }} </a></h3>
                    <p class="text-dark">{{ $hotel->hotelDescription }}</p>
                    <p><mark>{{ $hotel->hotelAdresse }}</mark></p>
                    <a href="" class="btn btn-md btn-info float-right">Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection