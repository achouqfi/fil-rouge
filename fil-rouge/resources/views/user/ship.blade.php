@extends('layoutUser.navbarFooter')

@section('navbar')
    <a href="/" class="nav-item nav-link " >Home</a>
    <a href="/about" class="nav-item nav-link">About</a>			
    <a href="/ship" class="nav-item nav-link active">Ship</a>
    <a href="/plan" class="nav-item nav-link ">Plan</a>
    <a href="/blog" class="nav-item nav-link ">Blog</a>
    <a href="/contact" class="nav-item nav-link ">Contact</a>
@endsection

@section('content')
<body>
    <!-------------------------- About Us ----------------->
    <div class="trip">
        <h2>Customize your surfboard</h2> 
        <div class="line"></div>
    </div>

    <div class="container ship">
      <div class="row row2">
        <div class="col imageAbout">
          <img src="/image/shipfahd.jpg" alt="" width="100%">
        </div>
        <div class="col">
          <div class="shipTitle">
            <h2>How We work</h2>
          </div>
          <div class="shipPar">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem a nihil est impedit numquam eos sequi exercitationem inventore, unde similique ea culpa illum mollitia, quae accusantium obcaecati distinctio maxime natus?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sunt obcaecati eaque omnis ipsam a asperiores tenetur dicta, aliquid pariatur sapiente beatae ratione, totam aliquam suscipit necessitatibus et dolor accusantium.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="imgBords">
      <img src="./image/board11.png" alt="" width="80%">
    </div>

    <div class="container ship">
      <div class="row row2">
        <div class="col">
          <div class="shipTitle">
            <h4>Surfboard Volume Calculator Formula</h4>
          </div>
          <div class="boardInfo">
            <p>To calculate your surfboard’s volume given its dimensions: </p>
            <ul>
              <li>Convert the length, width, and height of your surfboard into centimeters.</li>
              <li>Multiply these numbers.</li>
              <li>Imagine your surfboard inside a cube. If the cube itself is 100%, try to work out what percentage of the cube the shape of your surfboard takes up.</li>
              <li>Multiply your first product by the percentage you’ve worked out to get an estimate of your surfboard’s volume in liters.</li>
            </ul>
            <p>While surfboard volume is not the only factor in picking the right boards, knowing some general volume ranges that work for you for different types of boards can make choosing a good board easier.</p>
          </div>
          <div class="Shipbtn">
            <a class="btn btn-primary btn-outline btn-lg" href="#">See More</a>
          </div>
        </div>
        <div class="col imageAbout">
          <img src="./image/surfboardvolume.png" alt="" width="100%" height="400px">
        </div>
      </div>
    </div>

    @auth 
    @if (\Auth::user()->is_admin== 0)
      <div class="titleShip">
        <h4>Enter dimensions</h4>
        <div class="linee"></div>
      </div>
      <div class="container Conformulaire">
        <form action="{{ url('ship/create') }}" method="POST"  enctype="multipart/form-data">
          <div class="formilaireCustomaze">
            @csrf
            <div class="select">
              <select name="category" class="category">
                <option selected>Category</option>
                <option value="ShortBoard">ShortBoard</option>
                <option value="Fish">Fish</option>
                <option value="Funboard">Funboard</option>
                <option value="Longboard">Longboard</option>
                <option value="Gun">Gun</option>
                <option value="Funboard">Funboard</option>
              </select>
            </div>
            <div class="inputsForm">
              <div class="rowform1">
                <input type="text" name="color" placeholder="color">
                <input type="text" name="rocker" placeholder="rocker">
                <input type="text" name="typeOfWave" placeholder="type of wave">
              </div>
              <div class="rowform2"> 
                <input type="text" name="lenght" placeholder="lenght in inch">
                <input type="text" name="width" placeholder="width in inch">
                <input type="text" name="thickness" placeholder="thickness in inch">
              </div>
              <div class="rowform3">
                <textarea name="MoreDetails" id="" cols="30" rows="10" placeholder="More Details"></textarea>
              </div>
              <div class="btnForm">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Send Message" />
              </div>
            </div>
          </div>
        </form>
      </div>
      @if (session('order'))
        <div class="alert alert-success">{{ session('order') }}</div>            
      @endif
    @endif   
    @endauth

</body>
@endsection