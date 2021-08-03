@extends('layouts.sidebar')

@section('content')

    <div class="content">
        <div class="navCount">
            <div class="order">
                <i class="fa fa-shopping-cart"></i>
                <div class="info">
                    <span class="numbers">{{ $ShipCount }}</span>
                    <span class="name">Orders</span>
                </div>
            </div>

            <div class="order" >
            <i class="fa fa-envelope"></i>
            <div class="info">
                <span class="numbers">{{ $contactCount }}</span>
                <span class="message">Messages</span>
            </div>
            </div>

            <div class="order" >
            <i class="fa fa-ticket"></i>
                <div class="info">
                    <span class="numbers">{{ $CommentCount }}</span>
                    <span class="reservation">Commentaire</span>
                </div>
            </div>

            <div class="order" >
            <i class="fa fa-users"></i>
            <div class="info">
                <span class="numbers">{{ $userCount }}</span>
                <span class="users">Users</span>
            </div>
            </div>
        </div>
    </div>


@endsection

