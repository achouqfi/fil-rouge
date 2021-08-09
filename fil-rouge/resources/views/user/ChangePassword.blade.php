@extends('layouts.app')
@section('content')
<div class="container mb-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>            
            @endif
            <div class="card">
                <div class="card-header bg-info "> 
                    <h2 class="text-center font-weight-bold text-light">{{ __('Changer votre mode de passe') }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('changePassword') }}" enctype="multipart/form-data">
                        @csrf
   
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Ancien mode de passe</label>
  
                            <div class="col-md-6">
                                <input  type="password" class="form-control" name="current_password">
                                @if ($errors->any('current_password'))
                                    <span class="text-danger">{{ $errors->first('current_password') }}</span>
                                @endif
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nouveau mode de passe</label>
  
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="new_password" >
                                @if ($errors->any('new_password'))
                                    <span class="text-danger">{{ $errors->first('new_password') }}</span>
                                @endif
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirmer le mode de passe</label>
    
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" >
                                @if ($errors->any('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    Update 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection