@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row ">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>category</th>
            <th>color</th>
            <th>rocker</th>
            <th>typeOfWave</th>
            <th>lenght</th>
            <th>width</th>
            <th>thickness</th>
            <th>MoreDetails</th>
            <th>users id</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($ship as $ship)
        <tr>
            <td> {{ $ship->id }}</td>
            <td> {{ $ship->category}}</td>
            <td> {{ $ship->color}}</td>
            <td> {{ $ship->rocker}}</td>
            <td> {{ $ship->typeOfWave}}</td>
            <td> {{ $ship->lenght}}</td>
            <td> {{ $ship->width }}</td>
            <td> {{ $ship->thickness }}</td>
            <td> {{ $ship->MoreDetails }}</td>
            <td> {{ $ship->users_id }}</td>
            <td>
                <form action="{{ url("shipadmin/".$ship->id) }}" method="POST" >
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    </div>
</div>
@endsection