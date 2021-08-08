@extends('layouts.sidebar')

@section('content')

    <div class="container countContainer">
        <div class="row">
            <div class=" col-md-3">
                <div class="counter-box "> <i class="fa fa-shopping-cart"></i> <span class="counter">{{ $ShipCount }}</span>
                    <p>Orders</p>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="counter-box"> <i class="fa fa-envelope"></i> <span class="counter">{{ $contactCount }}</span>
                    <p>Messages</p>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="counter-box"> <i class="fa fa-comment"></i> <span class="counter">{{ $CommentCount }}</span>
                    <p>Comment</p>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="counter-box"> <i class="fa fa-group"></i> <span class="counter">{{ $userCount }}</span>
                    <p>Registered Members</p>
                </div>
            </div>
        </div>
        <img class="mt-5" src="https://img.icons8.com/dotty/80/000000/admin-settings-male.png" width="30%"/>
    </div>
@endsection

