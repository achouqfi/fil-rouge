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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  <!-- Bootstrap CSS -->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>           <!--CKEditor CDN -->
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <title>Dashboard</title>

</head>
<body>
    <!-------------------------- home page -------------------->
    <nav class="main-menu">
        <ul class="logo">
            <li>
                <a href="/admin/home"><img src="/image/logo.png" alt="" height="40px" width="65px"> </a>
            </li>  
        </ul>

        <ul class="menulist">
            <li>
                <a href="/admin/home"><i class="fa fa-home "></i></a>    
            </li>
            <li>
                <a href="/AdminHotel"><i class="fa fa-newspaper-o "></i></a>
            </li>
            <li>
                <a href="/article"><i class=" fa fa-ticket"></i></a>
            </li>
            <li>
                <a href="/contactadmin"><i class="fa fa-envelope "></i></a>
            </li>
            <li>
                <a href="/shipadmin"><i class="fa fa-shopping-cart "></i></a>
            </li>
            <li>
                <a href="/users"><i class="fa fa-users "></i></a>
            </li>
            <li>
                <a href="/newsletter" ><i class=" ml-.5 fa fa-envelope-square"></i></a>
            </li>
        </ul>

        <form action="{{ route('logout') }}" method="POST" class="logout">
            @csrf
            <button type="submit" >
                <i class="fa fa-power-off "></i>
            </button>
        </form>

    </nav>


    @yield('content')



    @yield('scriptText')
</body>
</html>