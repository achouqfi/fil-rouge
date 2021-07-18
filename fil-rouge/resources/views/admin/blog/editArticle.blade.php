@extends('layouts.sidebar')

@section('content')

	<link rel="stylesheet" href="{{ URL::asset('css/createArticle.css') }}">
	
		<div class="col-md-12 article">
			<h2>Modifié cet article</h2>
			<div class="Article-form">
                <form action="{{ url('article/'.$article->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Titre de l'article</label>
                        <div class="col-sm-12">          
                            <input type="text" class="form-control" placeholder="Saisir le titre" value="{{ $article->title }}" name="titre">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Photo</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" name="photo">
                        </div>
                        </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2">Article</label>
                        <div class="col-sm-12">
                            <textarea name="article" placeholder="Saisir l'article" value="{{ $article->text }}" id="Text"></textarea>
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