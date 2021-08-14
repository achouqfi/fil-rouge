@auth
@if (Auth::user()->is_admin === 1)

@extends('layouts.sidebar')

@section('content')

    <div class="container">
        <div class="table-responsive"  style="width: 120%;margin-left:-10%">
            @if (session('hotel'))
                <div class="alert alert-success">{{ session('hotel') }}</div>            
            @endif
                @if (session('dlthotel'))
            <div class="alert alert-success">{{ session('dlthotel') }}</div>            
            @endif
            @if (session('edithotel'))
                <div class="alert alert-success">{{ session('edithotel') }}</div>
            @endif
            
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>HOTEL LIST</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addHotel" class="btn btn-success" data-toggle="modal">Add Hotel</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Adresse</th>
                            <th>Phone</th>
                            <th>Photo principale</th>
                            <th>Description</th>
                            <th>Details photos</th>
                            <th>housing type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($hotels as $hotel)
                        <tr>
                            <td>{{ $hotel->id }}</td>
                            <td>{{ $hotel->hotelName  }}</td>
                            <td>{{ $hotel->hotelAdresse  }}</td>
                            <td>{{ $hotel->phone  }}</td>
                            <td><img src="{{ asset( $hotel->photoPrincipal ) }}" alt="" height="40px"></td>
                            <td>{{ $hotel->hotelDescription  }}</td>
                            <td> <a href="{{ url('adminPhotoHotel/'.$hotel->id) }}"  class="btn btn-warning btn-md photo" > Add photo</a></td>
                            <td> <a href="{{ url('AdminChambreHotel/'.$hotel->id) }}"  class="btn btn-warning btn-md photo" > Add Chambre</a></td>

                            <td class="d-flex mt-3">
                                <a href="{{ url('AdminEditHotel/'.$hotel->id ) }}" class="btn btn-info btn-md"> Update</a>
                                <form action="{{ url('AdminDltHotel/'.$hotel->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-md ml-3">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <span>{{ $hotels->links( "pagination::bootstrap-4") }}</span>
            </div>
        </div>        
    </div>
    <!-- Add -->
    <div id="addHotel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
				<form action="{{ url('AdminAddHotel') }}" method="POST" enctype="multipart/form-data">
					@csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Add New Hotel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" name="adresse" class="form-control" required>
                        </div> 
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div> 
                       <div class="form-group">
                            <label>Photo Principale</label>
                            <input type="file" name="photoPrincipal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" required></textarea>
                        </div>					
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit"  class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@endif
@endauth
