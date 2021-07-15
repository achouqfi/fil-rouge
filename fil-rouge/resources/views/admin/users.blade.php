@extends('layouts.sidebar')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/dashboardContent.css') }}">

<div class="container">
    <div class="row ">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>role</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($users as $user)
        <tr>
            <td> {{ $user->id }}</td>
            <td> {{ $user->name}}</td>
            <td> {{ $user->email }}</td>
            @if ($user->is_admin === 1)
                <td>Admin</td>
             @else
                <td>User</td>
            @endif 
            <td>
                <form action="{{ url('users/'.$user->id) }}" method="POST">
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