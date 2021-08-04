@extends('layouts.sidebar')

@section('content')
    <div class="container-xl">
        <div class="table-responsive">

            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2> {{ $chambre->housingType }}</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ url("AdminChambreHotel/".$chambre->riad_id) }}" class="btn btn-dark"> < Back</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="main">
                        <div class="main-center">
                        <h5>This is the old data of {{ $chambre->housingType }} :</h5>
                            <form action="{{ url('AdminUpdateChambre/'.$chambre->id) }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf

                                <input type="hidden" name="hotel_id" value="{{ $chambre->riad_id}}">
                                <div class="form-group">
                                    <label for="name"></label>
                                    <input type="text" name="type" class="form-control" value="{{ $chambre->housingType }}" name="name" required/>
                                </div>
                                <div class="form-group">
                                    <label for="email">chambre </label>
                                    <input type="text" name="for" class="form-control" value="{{ $chambre->for }}" name="adresse" required/>
                                </div>
                                <div class="form-group">
                                    <label for="email">chambre adress</label>
                                    <input type="text" name="tarif" class="form-control" value="{{ $chambre->price }}" name="adresse" required/>
                                </div>
                                <div class="form-group">
                                    <label for="email">chambre adress</label>
                                    <textarea style="height: 150px" name="option" id="Text" name="" class="form-control" >{{ $chambre->option }}</textarea>
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

@section('scriptText')
	 
	<script>
		ClassicEditor
			.create( document.querySelector( '#Text' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>

@endsection



