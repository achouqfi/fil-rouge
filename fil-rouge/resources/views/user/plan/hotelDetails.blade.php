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
                        <td>{{ $chambre->price }} MAD <input type="hidden" value="{{ $chambre->price }}" id="price"></td>
                        <td>{!! Str::limit($chambre->option,40) !!}<a style="color: #" href="">Suite</a></td> 
                        <td><input type="number" id="jrs" min="0" max="7"> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- facture --}}
    <div class="container">     
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-info"><strong>Order summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td><strong>Nom de l'hotel</strong></td>
                                        <td class="text-center"><strong>Prix(nuit)</strong></td>
                                        <td class="text-center"><strong>Nombre des jours</strong></td>
                                        <td class="text-right"><strong>Totals</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotelDetails->chambres as $chambre)
                                        <tr>
                                            <td><strong>{{ $chambre->housingType }}</strong> </td>
                                            <td class="text-center">{{ $chambre->price }}</td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$10.99</td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td class="thick-line"></td>
                                            <td class="thick-line"></td>
                                            <td class="thick-line text-center"><strong>Total HT</strong></td>
                                            <td class="thick-line text-right">670.99 MAD</td>
                                        </tr>
                                        <tr>
                                            <td class="no-line"></td>
                                            <td class="no-line"></td>
                                            <td class="no-line text-center"><strong>TVA</strong></td>
                                            <td class="no-line text-right"><input type="hidden" value="0.2" id="tva"> 20%</td>
                                        </tr>
                                        <tr>
                                            <td class="no-line"></td>
                                            <td class="no-line"></td>
                                            <td class="no-line text-center"><strong>Total TTC</strong></td>
                                            <td class="no-line text-right"> 685.99 MAD</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        <button class="btn btn-info btn-lg float-right">Reserver</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptjs')
    <script>
        
        function calcul()
        {

        }
    </script>
@endsection
