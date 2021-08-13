@extends('layouts.sidebar')
@auth
@if (Auth::user()->is_admin === 1)
    
@section('content')
   <div class="container">
        <div class="table-responsive"  >
            @if (session('dltEmail'))
                <div class="alert alert-danger">{{ session('dltEmail') }}</div>            
            @endif
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Newsletter LIST</b></h2>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($newsletters as $newsletter)
                        <tr>
                            <td> {{ $newsletter->id }}</td>
                            <td> {{ $newsletter->email }}</td>
 
                            <td class="d-flex">
                                <form action="{{ url('Dltnewsletter/'.$newsletter->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger">Supprimer</button>
                                </form>
                                <a href="mailto: {{ $newsletter->email }}" class="btn btn-info btn-md ml-4">reply</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <span >{{ $newsletters->links( "pagination::bootstrap-4") }}</span>
            </div>
        </div>        
    </div>
</div>
@endsection

@endif
@endauth



