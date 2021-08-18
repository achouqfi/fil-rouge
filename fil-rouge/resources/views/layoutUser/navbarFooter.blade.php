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
  <link rel="stylesheet" href="{{ URL::asset('css/frontoffice.css') }}">
  <title>surf in Safi</title>

</head>
<body>
   <!-- about newsleter message-->
   @if (session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>            
   @endif
  <!-------------------- navbar ------------------->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">Surfing In<b> SAFI</b></a>  		
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse ">
        <div class="navbar-nav ">

            @yield('navbar')

         </div>
         <!-- if user is authenticated --> 
         @auth 
            @if (\Auth::user())
               <div class="navbar-nav ml-auto">
                  <a  class="nav-link" href="/auth"  >{{ Auth::user()->name }}</a>
                  <form  action="{{ route('logout') }}" method="POST" >
                     @csrf
                     <button class="btn btn-info">Logout</button>
                  </form>
               </div>
            @endif 
         @endauth	
         
         <!-- if user is NOT authenticated -->
         @guest
            <div class="navbar-nav ml-auto">
               <div class="loginbtn" >
               <a href="/auth" class="btn btn-info">Login</a>
               </div>
            </div>
         @endguest
        </div>
    </nav>


    @yield('content')
    @yield('scriptjs')


    <!---------------- footer ------------>
    <footer class="bg-info">
         <div class="container footer ">
            <div class="row ">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Follow text-center">
                     <h3>Follow Us</h3>
                  </div>
                  <ul class="icon d-flex align-middle ">
                     <li> <a href="#"><img src="/image/facebook.png"></a></li>
                     <li> <a href="#"><img src="/image/Twitter.png"></a></li>
                     <li> <a href="#"><img src="/image/linkedin.png"></a></li>
                     <li> <a href="#"><img src="/image/instagram.png"></a></li>
                  </ul>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                  <div class="Follow text-center">
                     <h3>Newsletter</h3>
                  </div>
                  <form action="{{ url('createnewletter') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <input class="Newsletter" name="email" placeholder="Enter your email" type="Enter your email" required>
                     <button class="btn btn-danger btn-md ml-1">Envoyer</button>
                  </form>
               </div>
            </div>
         </div>
   </footer>


</body>
</html>