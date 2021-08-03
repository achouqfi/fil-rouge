@extends('layoutUser.navbarFooter')

@section('content')
<section>


    <div class="trip">
        <h2>Hotels</h2> 
        <div class="line"></div>
    </div>

    <div class="container ship">
      <div class="row row2">
        <div class="col imageAbout">
          <img src="/image/riad-de-pecheur.jpg" alt="" width="100%">
        </div>
        <div class="col">
          <div class="shipTitle">
            <h2>Hotel A Safi</h2>
          </div>
          <div class="shipPar">
            <p>Les hotels de safi jouit d'un emplacement idéal au cœur de la baie de Safi, à une courte distance de marche de Potters Hill et de la Médina. Toutes les chambres offrent une vue splendide sur la mer. <br>
              Le restaurant Riad du Pêcheur propose des spécialités locales et une cuisine internationale. Les clients peuvent se détendre dans le calme du riad, après une journée passée à explorer les environs.<br>
              Les familles ont trouvé que l'emplacement de cet établissement était très bien. Ils lui ont donné la note de 8,5.
          </p>
          </div>
          <div class="Shipbtn">
            <a class="btn btn-primary btn-outline btn-lg" href="{{ url("/hotel") }}">See more</a>
          </div>
        </div>
      </div>
    </div>

@endsection