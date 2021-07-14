@extends('layoutUser.navbarFooter')

@section('content')
<body>
    <!-------------------------- About Us ----------------->
    <div class="trip">
        <link rel="stylesheet" href="{{ URL::asset('css/ship.css') }}">


        <h2>Customize your surfboard</h2> 
        <div class="line"></div>
      </div>

      <div class="ship">
        <div class="containerBoardShip">
            <img src="/image/shipfahd.jpg" alt="" width="600px">
        </div>

        <div class="shipDesc">
          <div class="shipTitle">
            <h2>How We work</h2>
          </div>
          <div class="shipPar">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem a nihil est impedit numquam eos sequi exercitationem inventore, unde similique ea culpa illum mollitia, quae accusantium obcaecati distinctio maxime natus?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sunt obcaecati eaque omnis ipsam a asperiores tenetur dicta, aliquid pariatur sapiente beatae ratione, totam aliquam suscipit necessitatibus et dolor accusantium.
            </p>
          </div>
          <div class="Shipbtn">
            <a class="btn btn-primary btn-outline btn-lg" href="#">Customize</a>
          </div>
        </div>
      </div>

      <div class="imgBords">
        <img src="./image/board11.png" alt="" width="80%">
      </div>

      <div class="titleShip">
        <h4>Surfboard Volume Calculator Formula</h4>
        <div class="linee"></div>
      </div>
      <div class="discBoard">
        <div class="textDesc">
          <p>To calculate your surfboard’s volume given its dimensions: </p>
          <ul>
            <li>Convert the length, width, and height of your surfboard into centimeters.</li>
            <li>Multiply these numbers.</li>
            <li>Imagine your surfboard inside a cube. If the cube itself is 100%, try to work out what percentage of the cube the shape of your surfboard takes up.</li>
            <li>A fuller, thicker outline and shape will take up a higher percentage (maybe 58-65%).</li>
            <li>A narrow, thinner outline and shape will take up a lower percentage (maybe 45-55%).</li>
            <li>If you want to get a more accurate estimate you can draw this out on paper or a computer by placing the outline inside a rectangle made up of 1×1 boxes and finding the ratio of board:not board from there.</li>
            <li>Multiply your first product by the percentage you’ve worked out to get an estimate of your surfboard’s volume in liters.</li>
          </ul>
          <p>While surfboard volume is not the only factor in picking the right boards, knowing some general volume ranges that work for you for different types of boards can make choosing a good board easier.</p>
          <div class="Shipbtn">
            <a class="btn btn-primary btn-outline btn-lg" href="#">See More</a>
          </div>
        </div>
        <div class="DescImg">
          <img src="./image/surfboardvolume.png" alt="" width="500px" height="400px">
        </div>
      </div>

      @auth    
      <div class="titleShip">
        <h4>Enter dimensions</h4>
        <div class="linee"></div>
      </div>
      <form action="{{ url('ship/create') }}" method="POST" enctype="multipart/form-data">
        <div class="formilaireCustomaze">
          @csrf
          <div class="select">
            <select name="category" class="category">
              <option selected>Category</option>
              <option value="1">ShortBoard</option>
              <option value="2">Fish</option>
              <option value="3">Funboard</option>
              <option value="3">Longboard</option>
              <option value="3">Gun</option>
              <option value="3">Funboard</option>
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
              <input type="submit" name="submit" class="btnContact" value="Send Message" />
            </div>
          </div>
        </div>
      </form>
      
      @endauth

</body>
@endsection