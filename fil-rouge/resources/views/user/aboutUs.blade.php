@extends('layoutUser.navbarFooter')

@section('navbar')
    <a href="/" class="nav-item nav-link " >Home</a>
    <a href="/about" class="nav-item nav-link active">About</a>			
    <a href="/ship" class="nav-item nav-link">Ship</a>
    <a href="/plan" class="nav-item nav-link ">Plan</a>
    <a href="/blog" class="nav-item nav-link ">Blog</a>
    <a href="/contact" class="nav-item nav-link ">Contact</a>
@endsection

@section('content')
<section>

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

    <div class="trip">
        <h2>About Us</h2> 
        <div class="line"></div>
    </div>

    <div class="container ship">
      <div class="row d-flex row2">
        <div class="col d-flex ">
          <img src="./image/rsvu.jpg" alt="" width="50%">
          <img src="./image/riad.jpeg" alt="" class="img2" width="50%">
        </div>
        <div class="col">
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
    </div>

    <div class="container ship">
      <div class="row d-flex row2">
        <div class="col">
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
        <div class="col d-flex ">
          <img src="/image/mosqué.jpeg" alt="" width="50%">
          <img src="/image/imssn.jpg" alt="" class="img2" width="50%">
        </div>
      </div>
    </div>

@endsection