@extends('layouts.sidebar')

@section('content')

    <div class="container">
        <div class="table-responsive" style="width: 110%;margin-left:-5%">
            @if (session('dltorder'))
                <div class="alert alert-success">{{ session('dltorder') }}</div>            
            @endif
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>ORDER LIST</b></h2>
                        </div>
                    </div>
                </div>
                <table class="tableShap table-hover" style="">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>category</th>      
                            <th>color</th>
                            <th>rocker</th>
                            <th>typeOfWave</th>
                            <th>Phone</th>  
                            <th>Adresse</th>
                            <th>post code</th> 
                            <th>lenght</th>
                            <th>width</th>
                            <th>thickness</th>
                            <th>MoreDetails</th>
                            <th>user </th>
                            <th>Etat</th>
                            <th>modification</th>
                            {{-- <th class="text-center">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ship as $ship)
                        <tr>
                            <td> {{ $ship->id }}</td>
                            <td> {{ $ship->category}}</td>
                            <td> {{ $ship->color}}</td>
                            <td> {{ $ship->rocker}}</td>
                            <td> {{ $ship->typeOfWave}}</td>
                            <td> {{ $ship->Phone}}</td>
                            <td> {{ $ship->Adresse}}</td>
                            <td> {{ $ship->postcode}}</td>
                            <td> {{ $ship->lenght}}</td>
                            <td> {{ $ship->width }}</td>
                            <td> {{ $ship->thickness }}</td>
                            <td> {{ $ship->MoreDetails }}</td>
                            <td> {{ $ship->user->name }}</td>

                            @if (  $ship->etat === 'envoyer')
                                <td> <span class="bg-success   text-white p-2 rounded">envoyer</span> </td>     
                            @endif
                            @if (  $ship->etat === 'confirmer')
                                <td> <span class="bg-success   text-white p-2 rounded">Comfirmed</span> </td>     
                            @endif
                            @if (  $ship->etat === 'livrer')
                                <td > <span class="bg-info   text-white p-2 rounded">livré</span> </td>     
                            @endif
                            @if (  $ship->etat === 'annuler')
                                <td> <span  class="bg-danger  text-white p-2 rounded">annuler</span></td>     
                            @endif
                            <form action="{{ url('etatCommande/'.$ship->id) }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf   
                                <td  class=" container d-block pt-4"> 
                                    <select  name="etat">
                                        <option value="" selected="selected" disabled>etat</option>
                                        <option class="bg-success text-white " value="confirmer">confirmer</option>
                                        <option class="bg-info text-white" value="livrer">livré</option>
                                        <option class="bg-danger text-white" value="annuler">annuler</option>
                                    </select>&nbsp;
                                    <button class="btn btn-success btn-md">modifie</button>
                                </td>
                            </form>
                            {{-- <td>
                                <form action="{{ url("shipadmin/".$ship->id) }}" method="POST" >
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger">Supprimer</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{-- <span >{{ $ship->links( "pagination::bootstrap-4") }}</span> --}}
            </div>
        </div>        
    </div>

@endsection