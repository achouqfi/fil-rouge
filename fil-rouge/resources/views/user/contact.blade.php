@extends('layoutUser.navbarFooter')

@section('navbar')
    <a href="/" class="nav-item nav-link font-weight-bold " >Accueil</a>
    <a href="/about" class="nav-item nav-link font-weight-bold ">About</a>			
    <a href="/ship" class="nav-item nav-link font-weight-bold ">Shap</a>
    <a href="/plan" class="nav-item nav-link font-weight-bold ">Hotel</a>
    <a href="/blog" class="nav-item nav-link font-weight-bold ">Blog</a>
    <a href="/contact" class="nav-item nav-link font-weight-bold active">Contact</a>
@endsection

@section('content')
    <div class="Contact">
        <div class="container">
            <div class="contact">
                <h2>Contact Us</h2> 
                <div class="Contactline"></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form action="{{ url('contact/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control" placeholder="Name" name="name" type="text" required>
                        </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control" placeholder="Email" name="email" type="Email" required>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control" placeholder="Phone Number" name="phone" type="text" required>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control" placeholder="Subject" name="subject" type="text" required>
                        </div>
                        <div class="col-sm-12">
                            <textarea class="textarea" name="message" placeholder="Message" required></textarea>
                        </div>
                        </div>
                        <button class=" btn font-weight-bold btn-outline-light btn-lg align-center send-btn">Send</button>
                        @if (session('contact'))
                            <div class="alert alert-info">{{ session('contact') }}</div>            
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection