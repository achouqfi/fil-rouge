@extends('layouts.sidebar')

@section('content')
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
    @foreach ($users as $users)
        <tr>
            <td> {{ $users->id }}</td>
            <td> {{ $users->name}}</td>
            <td> {{ $users->email }}</td>
            <td> {{ $users->is_admin }}</td>
            <td>
                <form action="{{ url('users/'.$users->id) }}" method="POST">
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