@extends('layoutUser.navbarFooter')

@section('content')
<section>

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

    <div class="trip">
        <h2>{{ $hotelDetails->hotelName }}</h2> 
        <div class="line"></div>
    </div>

    {{-- photo de l"hotel --}}
    <div class="hotelPhoto">
        @foreach ($hotelDetails->photos as $photo)
            <img src="{{ asset( $photo->pathPhoto) }}" alt="">
        @endforeach
    </div>
    
    {{-- informartion sur l'hotel --}}
    <div class="container informartionHotel">
        <div class="row">
            <h2 class="informationHotel">Informartion sur l'hotel</h2>
            <table class="table table-bordered ">
                <thead>
                    <tr >
                        <th>Nom de l'hotel</th>
                        <td>{{ $hotelDetails->hotelName }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th class="info">Email</th>
                        <td>{{  }}</td>
                    </tr>

                </thead>   
            </table>
        </div>
    </div>

@endsection