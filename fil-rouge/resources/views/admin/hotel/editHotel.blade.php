@extends('layouts.sidebar')

@section('content')

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Edit {{ $hotel->hotelName }} Row</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/AdminHotel" class="btn btn-dark"> < Back</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="main">
                        <div class="main-center">
                        <h5>This is the old data of {{ $hotel->hotelName }} :</h5>
                            <form action="{{ url('AdminUpdateHotel/'.$hotel->id) }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Hotel name</label>
                                    <input type="text" class="form-control" value="{{ $hotel->hotelName }}" name="name" required/>
                                </div>
        
                                <div class="form-group">
                                    <label for="email">Hotel adress</label>
                                    <input type="text" class="form-control" value="{{ $hotel->hotelAdresse }}" name="adresse" required/>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Hotel phone</label>
                                    <input type="text" class="form-control" value="{{ $hotel->phone }}" name="phone" required/>
                                </div>
        
                                <div class="form-group">
                                    <label>Add  principal photo</label>
                                    <div class="input-group">
                                        <img src="{{ asset($hotel->photoPrincipal) }}" alt="" width="50px">
                                        <input type="file" class="form-control"  name="photoPrincipal" required/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" required>{{ $hotel->hotelDescription }}</textarea>
                                </div>
        
                                <button type="submit" class="btn btn-success">Save</button>                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

@endsection




