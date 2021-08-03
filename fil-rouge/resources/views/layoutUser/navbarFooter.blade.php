<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
  <title>Home</title>
</head>
<body>

  <!-------------------- navbar ------------------->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Moroccan<b>Surf</b></a>  		
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse ">
        <div class="navbar-nav">
            <a href="/" class="nav-item nav-link active" >Home</a>
            <a href="/about" class="nav-item nav-link">About</a>			
            <a href="/ship" class="nav-item nav-link">Ship</a>
            <a href="/plan" class="nav-item nav-link ">Plan</a>
            <a href="/blog" class="nav-item nav-link ">Blog</a>
            <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
        <div class="navbar-nav ml-auto">
            <div class="loginbtn" >
              <button class="btn btn-info">Login</button>
            </div>
        </div>		
        </div>
    </nav>


    @yield('content')
    @yield('scriptjs')


    <!---------------- footer ------------>
    <footer>
      <div class="footer">
         <div class="container">
            <div class="row pdn-top-30">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Follow">
                     <h3>Follow Us</h3>
                  </div>
                  <ul class="location_icon">
                     <li> <a href="#"><img src="./image/facebook.png"></a></li>
                     <li> <a href="#"><img src="./image/Twitter.png"></a></li>
                     <li> <a href="#"><img src="./image/linkedin.png"></a></li>
                     <li> <a href="#"><img src="./image/instagram.png"></a></li>
                  </ul>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                  <div class="Follow">
                     <h3>Newsletter</h3>
                  </div>
                  <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                  <button class="Subscribe">Subscribe</button>
               </div>
            </div>
         </div>
      </div>
   </footer>


</body>
</html>