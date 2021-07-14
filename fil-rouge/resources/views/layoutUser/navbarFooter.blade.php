<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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


    <!---------------- footer ------------>
    <footer>
      <div class="footer">
        <div class="footerEmail">
          <h4>Send your email adress</h4>
          <input type="text" placeholder="Email">
          <a class="btn btn-primary btn-outline" href="#">Send</a>
        </div>
        <div>
          <div class="footerimg">
            <img src="./image/logo s.png" alt="" height="120px">
          </div>
        </div>
        <div class="SocialMedia">
          <h4>Social Media</h4  >
          <div class="SocialMediaicon">
            <ul>
              <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


</body>
</html>