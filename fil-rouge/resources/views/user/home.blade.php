@extends('layoutUser.navbarFooter')

@section('content')
<body>
    <!-- <div class="header"> -->
  <div class="img-home">
    <img src="./image/pexels-alexandre-saraiva-carniato-1644724.jpg" alt="home page" width="100%">
  </div>
  <div class="text">
    <h3>Trouvez des offres sur des hôtels, des hébergements <br>
      dfhrth zz tt ffffff  fssss dd ffff fffff tr <br>
      des offres sur des hôtels...</h3>
    <div class="reservation">
      <button class="btn btn-danger btn-md but-now">But Now</button>
      <button class="btn btn-info btn-md learn-more">Learn More</button>
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
    <h2>Create a trip of a lifetime</h2> 
    <div class="line"></div>
  </div>

  <div class="container Contrip">
    <div class="row ">
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="card">
                <img class="card-img-top" src="https://picsum.photos/200/150/?random">
                <div class="card-block">
                    <h4 class="card-title">Tawshif Ahsan Khan</h4>
                    <div class="card-text">
                        Tawshif is a web designer living in Bangladesh.
                    </div>
                </div>
                <div class="card-footer">
                    <span class="float-right">Joined in 2013</span>
                    <a href="" class="btn btn btn-info btn-md">See more</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
          <div class="card">
              <img class="card-img-top" src="https://picsum.photos/200/150/?random">
              <div class="card-block">
                  <h4 class="card-title">Tawshif Ahsan Khan</h4>
                  <div class="card-text">
                      Tawshif is a web designer living in Bangladesh.
                  </div>
              </div>
              <div class="card-footer">
                  <span class="float-right">Joined in 2013</span>
                  <a href="" class="btn btn btn-info btn-sm">See more</a>
                </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/200/150/?random">
            <div class="card-block">
                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                <div class="card-text">
                    Tawshif is a web designer living in Bangladesh.
                </div>
            </div>
            <div class="card-footer">
                <span class="float-right">Joined in 2013</span>
                <a href="" class="btn btn btn-info btn-sm">See more</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/200/150/?random">
            <div class="card-block">
                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                <div class="card-text">
                    Tawshif is a web designer living in Bangladesh.
                </div>
            </div>
            <div class="card-footer">
                <span class="float-right">Joined in 2013</span>
                <a href="" class="btn btn btn-info btn-sm">See more</a>
            </div>
          </div>
        </div>
        
    </div>
    <div class="text-center seeMore">
      <button type="button" class="btn btn-outline-info btn-lg">See more</button>
    </div>
  </div>

  {{------------------ blog and surf actuality --------------------}}
  <div class="trip">
    <h2>Blog </h2> 
    <div class="line"></div>
  </div>

  <div class="container">
    <div class="row">
        {{-- @foreach ($articles as $article) --}}
        <div class="col-md-6 col-lg-4">
            <div class="card-box">
                <div class="card-thumbnail">
                    <img src="./image/pexels-alexandre-saraiva-carniato-1644724.jpg" class="img-fluid"   alt="" >
                </div>
                <h3><a href="#" class="mt-2 text-info ">Tawshif is a web designer living in Bangladesh.</a></h3>
                <p class="text-dark">Tawshif Ahsan Khan</p>
                <a href="" class="btn btn btn-info btn-md float-right">Read More</a>
              </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-box">
              <div class="card-thumbnail">
                  <img src="./image/pexels-alexandre-saraiva-carniato-1644724.jpg"  class="img-fluid"  alt="" >
              </div>
              <h3><a href="#" class="mt-2 text-info ">Tawshif is a web designer living in Bangladesh.</a></h3>
              <p class="text-dark">Tawshif Ahsan Khan</p>
              <a href="" class="btn btn btn-info btn-md float-right">Read More</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-box">
              <div class="card-thumbnail">
                  <img src="./image/pexels-alexandre-saraiva-carniato-1644724.jpg"  class="img-fluid"   alt="" >
              </div>
              <h3><a href="#" class="mt-2 text-info ">Tawshif is a web designer living in Bangladesh.</a></h3>
              <p class="text-dark">Tawshif Ahsan Khan</p>
              <a href="" class="btn btn btn-info btn-md float-right">Read More</a>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
  </div>

  {{------------------- surf customizing --------------------------}}
  <div class="trip">
    <h2>Customize Your Surfboard</h2> 
    <div class="line"></div>
  </div>

  <div class="container ship">
    <div class="row row2">
      <div class="col  imageAbout">
        <img src="./image/boardShipping1.jpg" alt="" width="100%">
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
          <a class="btn btn-primary btn-outline btn-md" href="#">See All Activity</a>
        </div>
      </div>
    </div>
  </div>

  {{-- ------------------- contact ----------------------------}}
  <div class="trip">
    <h2>Contact Us</h2> 
    <div class="line"></div>
  </div>
 

@endsection

