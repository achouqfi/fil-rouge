@extends('layoutUser.navbarFooter')

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
                            <input class="form-control" placeholder="Name" name="name" type="text">
                        </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control" placeholder="Email" name="email" type="Email">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control" placeholder="Phone Number" name="phone" type="text">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control" placeholder="Subject" name="subject" type="text">
                        </div>
                        <div class="col-sm-12">
                            <textarea class="textarea" name="message" placeholder="Message"></textarea>
                        </div>
                        </div>
                    </form>
                </div>
                <button class=" btn btn-danger btn-lg align-center send-btn">Send</button>
            </div>
        </div>
    </div>
@endsection