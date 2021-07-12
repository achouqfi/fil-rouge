@extends('layoutUser.navbarFooter')

@section('content')
<section>

    <link rel="stylesheet" href="{{ URL::asset('css/contact.css') }}">

    <div class="container contact-form">
      <div class="contact-image">
          <img src="./image/contact-img.jpg" alt="rocket_contact"/>
      </div>
      <form action="{{ url('contact/create') }}" method="POST" enctype="multipart/form-data">
          <h3>Contact Us</h3>
         <div class="row">
            @csrf
              <div class="col-md-6">
                  <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                  </div>
                  <div class="form-group">
                      <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                  </div>
                  <div class="form-group">
                      <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                  </div>
                  <div class="form-group">
                      <input type="submit" name="submit" class="btnContact" value="Send Message" />
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                  </div>
              </div>
          </div>
      </form>
  </div>
</section>
@endsection