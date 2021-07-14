@extends('layoutUser.navbarFooter')

@section('content')
<section>

    <link rel="stylesheet" href="{{ URL::asset('css/ship.css') }}">

    <div class="trip">
        <h2>About Us</h2> 
        <div class="line"></div>
      </div>

      <div class=" ship">
        <div class="containerBoardShip">
            <img src="/image/rsvu.jpg" alt="" width="300px">
            <img src="/image/riad.jpeg" alt="" width="300px">
        </div>

        <div class="shipDesc">
          <div class="shipTitle">
            <h2>About our website</h2>
          </div>
          <div class="shipPar">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem a nihil est impedit numquam eos sequi exercitationem inventore, unde similique ea culpa illum mollitia, quae accusantium obcaecati distinctio maxime natus?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sunt obcaecati eaque omnis ipsam a asperiores tenetur dicta, aliquid pariatur sapiente beatae ratione, totam aliquam suscipit necessitatibus et dolor accusantium.
            </p>
          </div>
          <div class="Shipbtn">
            <a class="btn btn-primary btn-outline btn-lg" href="#">See All Activity</a>
          </div>
        </div>
      </div>

      <div class="ship">

        <div class="shipDesc">
          <div class="shipTitle">
            <h2>About our website</h2>
          </div>
          <div class="shipPar">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem a nihil est impedit numquam eos sequi exercitationem inventore, unde similique ea culpa illum mollitia, quae accusantium obcaecati distinctio maxime natus?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sunt obcaecati eaque omnis ipsam a asperiores tenetur dicta, aliquid pariatur sapiente beatae ratione, totam aliquam suscipit necessitatibus et dolor accusantium.
            </p>
          </div>
          <div class="Shipbtn">
            <a class="btn btn-primary btn-outline btn-lg" href="#">See All Activity</a>
          </div>
        </div>

        <div class="containerBoardShip">
            <img src="/image/mosqué.jpeg" alt="" width="300px">
            <img src="/image/imssn.jpg" alt="" width="300px">
        </div>
      </div>

@endsection