@extends('layouts.sidebar')

@section('content')

    <div class="container  countContaine">
        <div class="row mt-5">
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
        <div class="mt-5">
            <img src="/image/pale-order-completed.png" alt="" width="25%">
            <img src="/image/bermuda-message.png" alt=""  width="23%">
            <img src="/image/surr-672.png" alt="" class="ml-4" width="25%">
            <img src="/image/urban-line-user-2.png" alt="" class="ml-5" width="15%">
        </div>

    </div>
@endsection

