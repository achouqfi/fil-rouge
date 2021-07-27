@extends('layoutUser.navbarFooter')

@section('content')
<section>

    <link rel="stylesheet" href="{{ URL::asset('css/ship.css') }}">

    <div class="trip">
        <h2>Riad And Surf School</h2> 
        <div class="line"></div>
      </div>

      <div class=" ship">
        <div class="containerBoardShip">
            <img src="/image/riad-de-pecheur.jpg" alt="" width="600px">
        </div>

        <div class="shipDesc">
          <div class="shipTitle">
            <h2>Riad Du Pecheur Safi</h2>
          </div>
          <div class="shipPar">
            <p>Le Riad du Pêcheur jouit d'un emplacement idéal au cœur de la baie de Safi, à une courte distance de marche de Potters Hill et de la Médina. Toutes les chambres offrent une vue splendide sur la mer. <br>
                Le restaurant Riad du Pêcheur propose des spécialités locales et une cuisine internationale. Les clients peuvent se détendre dans le calme du riad, après une journée passée à explorer les environs.<br>
                Les familles ont trouvé que l'emplacement de cet établissement était très bien. Ils lui ont donné la note de 8,5.
            </p>
          </div>
          <div class="Shipbtn">
            <a class="btn btn-primary btn-outline btn-lg" href="#">Book New</a>
          </div>
        </div>
      </div>

      <div class="ship">

        <div class="shipDesc">
          <div class="shipTitle">
            <h2>Surfland Camps</h2>
          </div>
          <div class="shipPar">
            <p>Surfland Camps est votre club de sport à Oualidia, situé exactement à Oualidia, Morocco en plein coeur de Oualidia. Surfland Camps vous accueille et propose un ensemble de services et d'activités : Surf, et autres. Surfland Camps est un club de sport pour Femme et Homme et Enfant.
                SURFLAND OUALIDIA : école de surf créée en 1991, organisant cours et stage de surf à Oualidia (tous niveaux), avec hébergement en surfcamp, appartements ou hôtel.
            </p>
          </div>
          <div class="Shipbtn">
            <a class="btn btn-primary btn-outline btn-lg" href="#">Book Now</a>
          </div>
        </div>

        <div class="containerBoardShip">
            <img src="/image/surfCours.jpg" alt="" width="600px">
        </div>
      </div>

@endsection