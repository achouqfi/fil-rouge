@extends('layouts.sidebar')

@section('content')

    <div class="container">
        <div class="table-responsive">
            @if (session('photo'))
            <div class="alert alert-success">{{ session('photo') }}</div>            
            @endif
            @if (session('dltphoto'))
            <div class="alert alert-success">{{ session('dltphoto') }}</div>            
            @endif
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Photos For {{ $hotel->hotelName }}</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addHotel" class="btn btn-success" data-toggle="modal">Add Photo</a>
                            <a href="/AdminHotel" class="btn btn-dark"> < Back</a>
                        </div>

                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotel->photos as $photo)
                        <tr>
                            <td>{{ $photo->id }}</td>
                            <td><img src="{{ asset($photo->pathPhoto)  }}" alt="" height="50px"></td>
                            <td class="actionBtn">
                                <form action="{{ url('AdminDltPhotoHotel/'.$photo->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-md">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
    <!-- Add -->
    <div id="addHotel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
				<form action="{{ url('AdminAddPhotoHotel') }}" method="POST" enctype="multipart/form-data">
					@csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Add photo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                            <input type="file" name="photos[]" class="form-control" multiple="multiple" required>
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




