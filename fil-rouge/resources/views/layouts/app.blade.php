<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Surfing in Safi</title>

    {{-- <title>{{ config('app.name', '') }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/frontoffice.css') }}">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">Moroccan<b>Surf</b></a>  		
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse ">
            <div class="navbar-nav font-weight-bold">
                <a href="/" class="nav-item nav-link font-weight-bold " >Accueil</a>
                <a href="/about" class="nav-item nav-link font-weight-bold">About</a>			
                <a href="/ship" class="nav-item nav-link font-weight-bold">Shap</a>
                <a href="/plan" class="nav-item nav-link font-weight-bold ">Hotel</a>
                <a href="/blog" class="nav-item nav-link font-weight-bold ">Blog</a>
                <a href="/contact" class="nav-item nav-link font-weight-bold">Contact</a>
            </div>
            <div class="navbar-nav ml-auto">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="">
                                <a class="btn btn-info login" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="">
                                <a class="btn btn-outline-info login" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item  d-flex">
                            <a  class="nav-link" href="/auth"  >{{ Auth::user()->name }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                                <button class="btn btn-info">Logout</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>		
    </nav>

        <main class="py-5">
            @yield('content')
        </main>

    <footer class="mt-5 bg-info">
        <div class="container footer">
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
