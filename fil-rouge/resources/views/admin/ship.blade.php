@auth
@if (Auth::user()->is_admin === 1)
@extends('layouts.sidebar')

@section('content')

    <div class="container">
        <div class="table-responsive" style="width: 110%;margin-left:-5%">

            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>ORDER LIST</b></h2>
                        </div>
                    </div>
                </div>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>category</th>      
                            <th>color</th>
                            <th>typeOfWave</th>
                            <th>Phone</th>  
                            <th>Adresse</th>
                            <th>lenght</th>
                            <th>width</th>
                            <th>MoreDetails</th>
                            <th>user </th>
                            <th>Etat</th>
                            <th>Modification</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shaps as $shap)
                        <tr>
                            <td> {{ $shap->id }}</td>
                            <td> {{ $shap->category}}</td>
                            <td> {{ $shap->color}}</td>
                            <td> {{ $shap->typeOfWave}}</td>
                            <td> {{ $shap->Phone}}</td>
                            <td> {{ $shap->Adresse}}</td>
                            <td> {{ $shap->lenght}}</td>
                            <td> {{ $shap->width }}</td>
                            <td> {{ $shap->MoreDetails }}</td>
                            <td> {{ $shap->user->name }}</td>

                            @if (  $shap->etat === 'envoyer')
                                <td> <span class="bg-success   text-white p-2 rounded">envoyer</span> </td>     
                            @endif
                            @if (  $shap->etat === 'confirmer')
                                <td> <span class="bg-success   text-white p-2 rounded">Comfirmed</span> </td>     
                            @endif
                            @if (  $shap->etat === 'livrer')
                                <td > <span class="bg-info   text-white p-2 rounded">livré</span> </td>     
                            @endif
                            @if (  $shap->etat === 'annuler')
                                <td> <span  class="bg-danger  text-white p-2 rounded">annuler</span></td>     
                            @endif
                            <form action="{{ url('etatCommande/'.$shap->id) }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf   
                                <td  class=" container "> 
                                    <select  class="form-control ml-2 mt-" style="width: 100px;" name="etat">
                                        <option value="" selected="selected" disabled>etat</option>
                                        <option class="bg-success text-white " value="confirmer">confirmer</option>
                                        <option class="bg-info text-white" value="livrer">livré</option>
                                        <option class="bg-danger text-white" value="annuler">annuler</option>
                                    </select>&nbsp;
                                    <button class="btn btn-success btn-md ml-2 mt-2 ">modifie</button>
                                </td>
                            </form>

                        </tr>
                    @endforeach
                </tbody>
                </table>
                <span>{{ $shaps->links( "pagination::bootstrap-4") }}</span>

            </div>
        </div>        
    </div>

@endsection

@endif
@endauth