@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
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
                                <input id="password" type="password" class="form-control" name="current_password">
                                @if ($errors->any('old_password'))
                                    <span class="text-danger">{{ $errors->first('old_password') }}</span>
                                @endif
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nouveau mode de passe</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" >
                                @if ($errors->any('new_password'))
                                    <span class="text-danger">{{ $errors->first('new_password') }}</span>
                                @endif
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirmer le mode de passe</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="password" >
                                @if ($errors->any('comfirm_password'))
                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
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