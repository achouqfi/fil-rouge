@extends('layouts.sidebar')

@section('content')
   <div class="container">
        <div class="table-responsive"  style="width: 110%;margin-left:-5%">
            @if (session('dltuser'))
                <div class="alert alert-success">{{ session('dltuser') }}</div>            
            @endif
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>User LIST</b></h2>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>email</th>
                            <th>role</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

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

                    </tbody>
                </table>
                {{-- <span>{{ $articles->links( "pagination::bootstrap-4") }}</span> --}}
            </div>
        </div>        
    </div>
</div>
@endsection