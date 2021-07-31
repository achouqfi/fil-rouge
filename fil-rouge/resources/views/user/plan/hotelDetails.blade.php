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
                        <td>{{ $hotelDetails->hotelAdresse }}</td>
                    </tr>
                    <tr>
                        <th>Caracteritque</th>
                        <td>{{ $hotelDetails->hotelDescription }}</td>
                    </tr>

                </thead>   
            </table>
        </div>
    </div>

    {{-- les chambre et les Caracteritiques --}}
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Chambres de {{ $hotelDetails->hotelName }}</h2>
                    </div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Type de logement</th>
                        <th>Pour</th>
                        <th>Prix</th>
                        <th>Options</th>
                        <th>Nombre des nuits</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hotelDetails->chambres as $chambre)
                    <tr>
                        <td>{{ $chambre->housingType }}</td>
                        <td>{{ $chambre->for }} personne</td>
                        <td>{{ $chambre->price }} MAD</td>
                        <td>{!! Str::limit($chambre->option,40) !!}<a style="color: #" href="">Suite</a></td> 
                        <td><input type="number" min="0" max="7"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  
@endsection