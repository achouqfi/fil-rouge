@extends('layouts.app')

@section('content')
    

    <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="Admin" class="rounded-circle p-1 bg-info" width="110">
								<div class="mt-3">
									<h4>{{ Auth::user()->name }}</h4>
									<p class="text-secondary mb-1">
                                        @if (Auth::user()->is_admin === 1)
                                        <td>Admin</td>
                                        @else
                                            <td>User</td>
                                        @endif 
                                    </p>
									<p class="text-muted font-size-sm">{{ Auth::user()->email }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
                @if (Auth::user()->is_admin === 0)
                <div class="col-lg-8">
					<div class="card">
						<div class="card-body">
                            <h5 class="d-flex align-items-center mb-3"> <b>Vos Commentaires</b></h5>
							<div class="row mb-3">
                                @foreach ($comments as $comment)
                                    <label>{{ $comment->comment }} </label>      
                                @endforeach
							</div> 
						</div>
					</div>
                        
					<div class="row">
						<div class="col-sm-12">
							<div class="card ">
                                @foreach (Auth::user()->commandes as $commande)
                                <h3 class="text-white bg-info mt-3 p-3">Etat de votre commande </h3> 
                                @if ($commande->etat === 'confirmer')
                                @endif
                                @if (  $commande->etat === 'envoyer')
                                    <td> <span class="text-info p-2 ">Vous pouvez modifier votre commande avant la comfirmation</span> </td>    
                                    <div class="card-body">
                                        
                                        <input type="text" class="form-control" value="{{ $commande->category }}">
                                        <input type="text" class="form-control"  value="{{ $commande->color }}">
                                        <input type="text" class="form-control"  value="{{ $commande->rocker }}">
                                        <input type="text" class="form-control"  value="{{ $commande->typeOfWave }}">
                                        <input type="text" class="form-control"  value="{{ $commande->lenght }}">
                                        <input type="text" class="form-control"  value="{{ $commande->width }}">
                                        <input class="form-control" type="text"  value="{{ $commande->thickness }}">
                                        <input class="form-control" type="text"  value="{{ $commande->MoreDetails }}">
                                    </div>
                                    <div class="col-sm-9 text-secondary mb-4">
                                        <input type="button" class="btn btn-info " value="Save">
                                    </div>
                                @endif
                                @if (  $commande->etat === 'confirmer')
                                <div class="container">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h2></h2>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <td> <span class="bg-success   text-white p-2 rounded">Comfirmed</span> </td>     

                                @endif
                                @if (  $commande->etat === 'livrer')
                                    <td > <span class="bg-info   text-white p-2 rounded">livré</span> </td>     
                                @endif
                                @if (  $commande->etat === 'annuler')
                                <table class="table table-hover" style="">
                                    <thead>
                                        <tr>
                                            <th>category</th>      
                                            <th>color</th>
                                            <th>rocker</th>
                                            <th>typeOfWave</th>
                                            <th>lenght</th>
                                            <th>width</th>
                                            <th>thickness</th>
                                            <th>MoreDetails</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> {{ $commande->category}}</td>
                                            <td> {{ $commande->color}}</td>
                                            <td> {{ $commande->rocker}}</td>
                                            <td> {{ $commande->typeOfWave}}</td>
                                            <td> {{ $commande->lenght}}</td>
                                            <td> {{ $commande->width }}</td>
                                            <td> {{ $commande->thickness }}</td>
                                            <td> {{ $commande->MoreDetails }}</td>
                                    </tbody>
                                </table>
                                    <td> <span  class="bg-danger  text-white p-2 rounded">annuler</span></td>     
                                @endif

                                @endforeach

							</div>
						</div>
					</div>
				</div>
                @endif
			</div>
		</div>
	</div>
        

@endsection
