@extends('layoutUser.navbarFooter')

@section('navbar')
    <a href="/" class="nav-item nav-link " >Home</a>
    <a href="/about" class="nav-item nav-link">About</a>			
    <a href="/ship" class="nav-item nav-link ">Ship</a>
    <a href="/plan" class="nav-item nav-link ">Plan</a>
    <a href="/blog" class="nav-item nav-link active">Blog</a>
    <a href="/contact" class="nav-item nav-link ">Contact</a>
@endsection

@section('content')
<section>

    <div class="trip">
        <h2>Blog </h2> 
        <div class="line"></div>
    </div>

    <div class="container " style="width: 80%">
        <img src="{{ asset($article->photo) }}" class="img-fluid mb-4" height="30%"  >
        <h3 >{{ $article->title }}</h3>
        <div >
            {!! $article->text !!}
        </div>
    </div>

    <div class="container  mr-5  ">
        <div class="row bootstrap snippets bootdeys">
            <div class="col-md-8 col-sm-12">
                <div class="comment-wrapper">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            @auth 
                                @if (\Auth::user()->is_admin == 0)
                                    <form action="{{ url('comment/save') }}" method="POST"  enctype="multipart/form-data">
                                        <input type="hidden" value="{{ $article->id }}" name="article" >
                                        @csrf
                                        <h4>Donner un commentaire</h4>
                                        <textarea class="form-control" name="commentaire" placeholder="Enter your comment"></textarea>
                                        <br>
                                        <button type="submit" name="submit" class="btn btn-info pull-right">Post</button>
                                        <div class="clearfix"></div>
                                    </form>
                                @elseif (\Auth::user()->is_admin == 1)
                                    <div class="m-5 bg-info p-2">
                                        <div class="bg-white p-4 d-flex justify-content-center ">
                                        <h4 class="mt-1 text-info">Voila la liste des commentaires</h4>
                                        </div>
                                    </div>
                                @endif 
                                @endauth

                            <ul class="media-list">
                                @foreach($article->comments as $comment)
                                <li class="media">
                                    <div class="media-body">
                                        <span class="text-muted pull-right">
                                            <small class="text-muted">{{ $comment->created_at }}</small>
                                        </span>
                                        <strong class="text-success">{{ $comment->user->name }}</strong>
                                        <p>
                                            {{ $comment->message }}
                                             @auth
                                            @if ($comment->user_id === Auth::user()->id)
                                            <div class="panel-body">
                                                <form action="{{ url('commentDlt/'.$comment->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div>
                                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                                    </div>
                                                </form>
                                            </div>
                                            @endif
                                            @endauth
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul> 
                            @if (session('comment'))
                                <div class="alert alert-success">{{ session('comment') }}</div>            
                            @endif
                            @if (session('dltcomment'))
                                <div class="alert alert-success">{{ session('dltcomment') }}</div>            
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @guest
    <div class="m-5 bg-info p-2">
        <div class="bg-white p-4 d-flex justify-content-center ">
          <h4 class="mt-1 text-info">Authentifiez-vous pour commenter:  </h4>
          <a href="/login " class="btn btn-info floart-center ml-2">Login</a>
        </div>
    </div>
    @endguest
@endsection