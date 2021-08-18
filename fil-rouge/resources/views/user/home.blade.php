@extends('layoutUser.navbarFooter')

@section('navbar')
  <a href="/" class="nav-item nav-link font-weight-bold active" >Accueil</a>
  <a href="/about" class="nav-item nav-link font-weight-bold ">About</a>			
  <a href="/ship" class="nav-item nav-link font-weight-bold ">Shap</a>
  <a href="/plan" class="nav-item nav-link font-weight-bold ">Hotel</a>
  <a href="/blog" class="nav-item nav-link font-weight-bold ">Blog</a>
  <a href="/contact" class="nav-item nav-link font-weight-bold ">Contact</a>
@endsection

@section('content')
<body>

  <div class="img-home">
    <img src="./image/pexels-alexandre-saraiva-carniato-1644724.jpg" alt="home page" width="100%">
  </div>
  <div class="text">
    <h3>Safi, Magic Wave & Meilleur bras droit au Maroc<br>
      Est une ville dans l'ouest du Maroc sur l'océan Atlantique.<br></h3>
    <div class="reservation">
      <a href="/hotel"  class="btn btn-danger btn-md but-now"><b>Voir Hotels</b> </a>
      <a href="/blog"class="btn btn-info btn-md learn-more"><b>About Safi</b> </a>
    </div>
  </div>

  {{----------- avantage et quality --------------}}
  <div class="avantage">
    <div class="container ">
      <div class="row ">
        <div class="col-sm icons">
          <img src="https://www.perfectwavetravel.com/wp-content/uploads/2020/02/shortboard-icon-525x525.png" alt="" width= "70px" >
          <h2>Bespoke Design</h2>
          <p>We’ll plan your surf trip around your specific <br>
          </p>
        </div>
        <div class="col-sm icons">
          <img src="https://www.perfectwavetravel.com/wp-content/uploads/2020/02/Resort-Icon-525x525.png" alt="" width= "70px" >
          <h2>Authentic Experiences</h2>
          <p>We’ll plan your surf trip around your specific <br>
          </p>
        </div>
        <div class="col-sm icons">
          <img src="https://www.perfectwavetravel.com/wp-content/uploads/2020/02/Eco-Icon-525x525.png" alt="" width= "70px" >
          <h2>Responsible Travel</h2>
          <p>We’ll plan your surf trip around your specific <br>
          </p>
        </div>
      </div>
    </div>
  </div>
  {{--------------- -trip and hotel informartion -----------------}}
  <div class="trip">
    <h2>Créer un voyage</h2> 
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
                    <a href="{{ url('hotelDetails/'.$hotel->id) }}" class="btn btn btn-info btn-md">Voir Plus</a>
                </div>
            </div>
        </div>
      @endforeach
    </div>
    <div class="text-center seeMore">
      <a href="/hotel" class="btn btn-outline-info btn-lg">Voir Plus</a>
    </div>
  </div>

  {{------------------ blog and surf actuality --------------------}}
  <div class="trip">
    <h2>Blog</h2> 
    <div class="line"></div>
  </div>

  <div class="container">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-12 col-sm-6 col-md-4 image-grid-item">
          <div style="background-image: url({{url($article->photo)}});" class="image-grid-cover">
            <a href="#" class="cover-wrapper">{!! Str::limit($article->title,50) !!}</a>
          </div>
        </div>
        @endforeach
    </div>
    <div class="text-center mb-3 seeMore">
      <a href="/blog" class="btn btn-outline-info btn-lg">Voir Plus</a>
    </div>
  </div>

  {{------------------- surf customizing --------------------------}}
  <div class="trip">
    <h2>Personnalisez votre Surfboard</h2> 
    <div class="line"></div>
  </div>

  <div class="container ship">
    <div class="row row2">
      <div class="col imageAbout">
        <img src="./image/boardShipping1.jpg" alt="" width="100%">
      </div>
      <div class="col">
        <div class="shipTitle">
          <h2>À propos de personnaliser la planche de Surfboard</h2>
        </div>
        <div class="shipPar">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem a nihil est impedit numquam eos sequi exercitationem inventore, unde similique ea culpa illum mollitia, quae accusantium obcaecati distinctio maxime natus?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sunt obcaecati eaque omnis ipsam a asperiores tenetur dicta, aliquid pariatur sapiente beatae ratione, totam aliquam suscipit necessitatibus et dolor accusantium.
          </p>
        </div>
        <div class="Shipbtn">
          <a class="btn btn-primary btn-outline btn-md" href="/ship">Shap Your board</a>
        </div>
      </div>
    </div>
  </div>
 
@endsection

