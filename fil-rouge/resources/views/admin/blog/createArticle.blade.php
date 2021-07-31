@extends('layouts.sidebar')

@section('content')

	{{-- <link rel="stylesheet" href="{{ URL::asset('css/createArticle.css') }}"> --}}
	
	<div class="container">
        <div class="table-responsive"  style="width: 110%;margin-left:-5%">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Add Article</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/article" class="btn btn-dark" >< Back</a>
                        </div>
                    </div>
                </div>
				<div class="col-md-12 article">
					<h2>Saisir les données</h2>
					<div class="Article-form">
						<form action="{{ url('article/save') }}" method="POST" enctype="multipart/form-data">
							@csrf
		
						<div class="form-group">
						  <label class="control-label col-sm-2" >Titre de l'article</label>
						  <div class="col-sm-12">          
							<input type="text" class="form-control" placeholder="Saisir le titre" name="titre">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" >Photo</label>
						  <div class="col-sm-12">          
							<input type="file" class="form-control"  name="photo">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2">Article</label>
						  <div class="col-sm-12">
							<textarea name="article" placeholder="Saisir l'article" id="Text"></textarea>
						</div>
						</div>
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-12">
							<button type="submit" name="submit" class="btn btn-info">Submit</button>
						  </div>
						</div>
						</form>
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