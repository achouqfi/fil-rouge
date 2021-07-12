@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row ">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>prenom</th>
            <th>email</th>
            <th>message</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($contact as $contact)
        <tr>
            <td> {{ $contact->id }}</td>
            <td> {{ $contact->name}}</td>
            <td> {{ $contact->prenom }}</td>
            <td> {{ $contact->email }}</td>
            <td> {{ $contact->message }}</td>
            <td>
                <form action="{{ url('contact/'.$contact->id) }}" method="POST">
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