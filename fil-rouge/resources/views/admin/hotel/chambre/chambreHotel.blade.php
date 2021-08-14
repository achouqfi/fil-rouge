@auth
@if (Auth::user()->is_admin === 1)

@extends('layouts.sidebar')

@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            @if (session('chambre'))
            <div class="alert alert-success">{{ session('chambre') }}</div>            
            @endif
            @if (session('dltchambre'))
            <div class="alert alert-success">{{ session('dltchambre') }}</div>            
            @endif
            @if (session('editchambre'))
            <div class="alert alert-success">{{ session('editchambre') }}</div>            
            @endif
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Chambres de {{ $hotelCh->hotelName }}</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addHotel" class="btn btn-success" data-toggle="modal">Add Chambre</a>
                            <a href="/AdminHotel" class="btn btn-dark"> < Back</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type de logement</th>
                            <th>Pour</th>
                            <th>Prix</th>
                            <th>Options</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotelCh->chambres as $chambre)
                        <tr>
                            <td>{{ $chambre->id }}</td>
                            <td>{{ $chambre->housingType }}</td>
                            <td>{{ $chambre->for }} personne</td>
                            <td>{{ $chambre->price }} MAD</td>
                            <td>{{$chambre->option }} </td> 
                            <td class="actionBtn d-flex">
                                <a href="{{ url('AdminEditChambre/'.$chambre->id) }}" class="btn btn-info">Update</a>
                                <form action="{{ url('AdminDltChambre/'.$chambre->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-md ml-2">Delete</button>
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
                <form action="{{ url('AdminAddChambre') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Add New room</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <input type="hidden" name="hotel_id" value="{{ $hotelCh->id }}">
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Type le logement</label>
                            <input type="text" name="type" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label>Pour</label>
                            <input type="number" name="for" class="form-control"  required>
                        </div> 
                        <div class="form-group">
                            <label>Tarif</label>
                            <input type="text" name="tarif" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label>Options</label>
                            <textarea name="option" class="form-control" id="Text" required>Les options</textarea>
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

@section('scriptText')
	
	<script>
		ClassicEditor
			.create( document.querySelector( '#Text' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>

@endsection

@endif
@endauth
