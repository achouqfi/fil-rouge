@extends('layouts.sidebar')

@section('content')

    <div class="container">
        <div class="table-responsive"  style="width: 110%;margin-left:-5%">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Article LIST</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/article/create" class="btn btn-success" >Add Article</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Photo</th>
                            <th>Article</th>
                            <th>Comments</th>
                            <th>Date de publication</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($articles as $article)
                        <tr>
                            <td> {{ $article->id }}</td>
                            <td> {{ $article->title}}</td>
                            <td><img  src="{{ asset($article->photo) }}" height="40px" width="50px"/></td>
                            <td>{!! Str::limit($article->text,40) !!}   <a style="color:#17a2b8" href="" data-toggle="modal">Suite</a></td> 
                            <td><a href="{{ url('comment/'.$article->id.'/shomAdmin') }}" class="btn btn-info">Comments</a></td>
                            <td> {{ $article->created_at }}</td>
                            <td style="display: flex">
                                <form action="{{ url('articleDlt/'.$article->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-md">Delete</button>
                                    <a href="{{ url('article/'.$article->id.'/edit') }}" class="btn btn-info btn-md">Update</a>
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



@endsection


