@extends('layouts.app')

@section('content')
    @if (session('annuler'))
        <div class="alert alert-success">{{ session('annuler') }}</div>            
    @endif
    @if (session('update'))
        <div class="alert alert-success">{{ session('update') }}</div>            
    @endif

    <div class="container">
		<div class="main-body">
			<div class="row">
                @if (Auth::user()->is_admin === 0)
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="userOrAdmin" class="rounded-circle p-1 bg-info" width="110">
								<div class="mt-3">
									<h4>{{ Auth::user()->name }}</h4>
									<p class="text-secondary mb-1"> <td>User</td> </p>
									<p class="text-secondary font-size-sm">{{ Auth::user()->email }}</p>
									<p class="text-secondary mb-3">Modifié votre mode de passe </p>
                                    <a href={{ url('changePassword/'.Auth::user()->id) }} class="btn btn-info p-2">Modifié</a>
								</div>
							</div>
						</div>
					</div>
				</div>


                <div class="col-lg-8">
					<div class="card pb-3">
                        <h3 class="text-white bg-info mt-3 p-3">Vos commantaires : </h3> 
                            @foreach (Auth::user()->Comments as $comment)
                            <table class="table  table-hover mt-4 " style="" >
                                <thead>
                                    <tr>
                                        <th>commentaire</th>      
                                        <th>titre d'article</th>
                                        <th class="text-center">supprimer</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> {{ $comment->message}} </td>
                                        <td> {{ $comment->article->title}}</td>
                                        <td >
                                            <form action="{{ url('commentDlt/'.$comment->id) }}" method="POST">
                                                {{ csrf_field() }} 
                                                {{ method_field('DELETE') }}
                                                <input type="submit" class="btn btn-danger ml-2" value="Supprimer">
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @endforeach
					</div>
                        
					<div class="row">
						<div class="col-sm-12">
							<div class="card mt-3 pb-3">
                                @foreach (Auth::user()->commandes as $commande)
                                <h3 class="text-white bg-info mt-3 p-3">Etat de votre commande </h3> 
                                @if (  $commande->etat === 'envoyer')
                                    <td> <span class="text-info p-2 ">Vous pouvez modifier votre commande avant la confirmation</span> </td>    
                                    <form action={{ url('UpdateUser/'.$commande->id) }} method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="_method" value="PUT">
                                        @csrf
                                        <div class="card-body">
                                            <input type="text"  name="category" value="{{ $commande->category }}"  class="form-control" required>
                                            <input type="text" class="form-control" name="color"  value="{{ $commande->color }}" required>
                                            <input type="text" class="form-control" name="typeOfWave" value="{{ $commande->typeOfWave }}" required>
                                            <input type="text" class="form-control" name="lenght" value="{{ $commande->lenght }}" required>
                                            <input type="text" class="form-control" name="width" value="{{ $commande->width }}" required>
                                            <textarea name="MoreDetails" class="form-control" id="" cols="10" rows="3" placeholder="More Details" required>{{ $commande->MoreDetails }}</textarea>

                                            <p class="text-danger mt-3">Information personnelle sur la commmande</p>
                                            <input type="text" class="form-control" name="Phone"  value="{{ $commande->Phone }}" required>
                                            <input class="form-control" type="text" name="Adresse"  value="{{ $commande->Adresse }}" required>      
                                        </div>
                                        <div class="col-sm-9 text-secondary mb-4 d-flex">
                                            <input type="submit" class="btn btn-info " value="Save">
                                    </form>
                                            <form action="{{ url('annulationUser/'.$commande->id) }}" method="POST">
                                                {{ csrf_field() }} 
                                                {{ method_field('DELETE') }}
                                                <input type="submit" class="btn btn-danger ml-2" value="Annuler">
                                            </form>
                                        </div>

                                @endif
                                @if (  $commande->etat === 'confirmer')
                                <table class="table  table-hover mt-4 " style="" >
                                    <thead>
                                        <tr>
                                            <th>category</th>      
                                            <th>color</th>
                                            <th>type</th>
                                            <th >Details</th>
                                            <th>lenght</th>
                                            <th>width</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> {{ $commande->category}} </td>
                                            <td> {{ $commande->color}}</td>
                                            <td> {{ $commande->typeOfWave}}</td>
                                            <td > {{ $commande->MoreDetails }}</td>
                                            <td> {{ $commande->lenght}} inch</td>
                                            <td> {{ $commande->width }} inch</td>
                                    </tbody>
                                </table>
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
                

                <!--if the person connected is the admin-->
                @else
                <div class="col">
					<div class="card">
						<div class="card-body">
							<div class=" flex-column  text-center">
								<img src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="userOrAdmin" class="rounded-circle p-1 bg-info" width="110">
								<div class="mt-3">
									<h4>{{ Auth::user()->name }}</h4>
									<p class="text-secondary mb-1">
                                        <td>Admin</td>
                                    </p>
									<p class="text-muted font-size-sm">{{ Auth::user()->email }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="container countContainer">
                    <h3 class=" text-center text-info mb-5">Here are the actions carried out by the users</h3>

                    <div class="row">
                        <div class=" col-md-3 mb-4">
                            <div class="counter-box bg-info"> <i class="fa fa-shopping-cart"></i> <span class="counter">{{ $ShipCount }}</span>
                                <p>Orders</p>
                            </div>
                        </div>
                        <div class=" col-md-3 mb-4">
                            <div class="counter-box bg-info"> <i class="fa fa-envelope"></i> <span class="counter">{{ $contactCount }}</span>
                                <p>Messages</p>
                            </div>
                        </div>
                        <div class=" col-md-3 mb-4">
                            <div class="counter-box bg-info"> <i class="fa fa-comment"></i> <span class="counter">{{ $CommentCount }}</span>
                                <p>Comment</p>
                            </div>
                        </div>
                        <div class=" col-md-3 mb-4">
                            <div class="counter-box bg-info"> <i class="fa fa-group"></i> <span class="counter">{{ $userCount }}</span>
                                <p>Registered Members</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
			</div>
		</div>
	</div>
        

@endsection
