@extends('layouts.sidebar')

@section('content')

    <div class="container">
        <div class="table-responsive"  style="width: 110%;margin-left:-5%">
            @if (session('dltcontact'))
                <div class="alert alert-success">{{ session('dltcontact') }}</div>            
            @endif
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Contact LIST</b></h2>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>message</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($contacts as $contact)
                        <tr>
                            <td> {{ $contact->id }}</td>
                            <td> {{ $contact->name}}</td>
                            <td> {{ $contact->prenom }}</td>
                            <td> {{ $contact->email }}</td>
                            <td> {{ $contact->message }}</td>
                            <td class="d-flex ">
                                <form action="{{ url('contact/'.$contact->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-md">Supprimer</button>
                                </form>
                                <a href="mailto: {{ $contact->prenom }}" class="btn btn-info btn-md ml-4">reply</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <span >{{ $contacts->links( "pagination::bootstrap-4") }}</span>
            </div>
        </div>        
    </div>
@endsection