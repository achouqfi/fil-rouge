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

                    @php
                        $i = 0;    
                        
                    @endphp
                    @foreach ($hotelDetails->chambres as $chambre)
                    <tr>
                        <td>{{ $chambre->housingType }} </td>
                        <td>{{ $chambre->for }} personne</td>
                        <td >{{ $chambre->price }} MAD
                            <input type="hidden" name="prix" value="{{ $chambre->price }}" id="price<?=$i?>">
                         </td>
                        <td>{{ $chambre->option}}</td> 
                        <td><input type="number" id="jrs<?=$i?>" value="0" min="0" max="7"></td>
                    </tr>
                    @php
                       $a = $i;
                        $i++;
                    @endphp
                    @endforeach
                    <button onclick="calcul(<?=$a?>)" class="btn btn-info btn-lg float-right" >Estimer</button>
                </tbody>
            </table>
        </div>
    </div>

    {{-- facture --}}
        <div class="container" id="facture" style="display: none">     
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-info"><strong>Facture</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <td><strong>Nom de l'hotel</strong></td>
                                            <td class="text-center"><strong>Nombre des jours</strong></td>
                                            <td class="text-right"><strong>Totals</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    
                                            <tr>
                                                <td ><strong>{{ $hotelDetails->hotelName }}</strong></td>
                                                <td class="text-center" id="jrsFacture">0</td>
                                                <td id="total" class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center"><strong>Total HT</strong></td>
                                                <td class="thick-line text-right">670.99 MAD</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>TVA</strong></td>
                                                <td class="no-line text-right"><input type="hidden" value="0.2" id="tva"> 20%</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Total TTC</strong></td>
                                                <td class="no-line text-right"> 685.99 MAD</td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-info btn-lg float-right" >Reserver</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('scriptjs')
    <script>

        function calcul(j)
        {
            document.getElementById('facture').style.display="block";
            var totaljr = 0;
            var prixTotal = 0;
            for (var i = 0; i <= j; i++) {

                var jrs = document.getElementById('jrs'+i).value;
                var price =  document.getElementById('price'+i).value;
                prixTotal =parseInt(price);
                totaljr += parseInt(jrs);
            }
            var total = prixTotal * totaljr;
            document.getElementById('jrsFacture').innerHTML=totaljr;
            document.getElementById('total').innerHTML = total ;
        }

    </script>
@endsection
