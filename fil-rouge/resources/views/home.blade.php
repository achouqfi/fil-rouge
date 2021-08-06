@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="osahan-account-page-left shadow-sm bg-white h-100">
                <div class="border-bottom p-4">
                    <div class="osahan-user text-center">
                        <div class="osahan-user-media">
                            <img class="mb-3 rounded-pill shadow-sm mt-1" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="gurdeep singh osahan">
                            <div class="osahan-user-media-body">
                                <h6 class="mb-2">Gurdeep Singh</h6>
                                <p class="mb-1">+91 85680-79956</p>
                                <p>iamosahan@gmail.com</p>
                                <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#edit-profile-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="payments-tab" data-toggle="tab" href="#payments" role="tab" aria-controls="payments" aria-selected="true"><i class="icofont-credit-card"></i> Payments</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="payments" role="tabpanel" aria-labelledby="payments-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Payments</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <div class="media-body">
                                               <a href="#">
                                                   <i class="icofont-visa icofont-4x"></i>
                                               </a>
                                                <a href="#">
                                                    <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                    <p>VALID TILL 10/2025</p>
                                                </a>
                                                <p class="mb-0 text-black font-weight-bold">
                                                    <a href="#">
                                                    </a><a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <div class="media-body">
                                                <a href="#">
                                                    <i class="icofont-mastercard icofont-4x"></i>
                                                </a>
                                                <a href="#">
                                                    <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                    <p>VALID TILL 10/2025</p>
                                                </a>
                                                <p class="mb-0 text-black font-weight-bold">
                                                    <a href="#">
                                                    </a><a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2 pb-2">
                            <div class="col-md-6">
                                <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <div class="media-body">
                                                <a href="#">
                                                    <i class="icofont-american-express icofont-4x"></i>
                                                </a>
                                                <a href="#">
                                                    <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                    <p>VALID TILL 10/2025</p>
                                                </a>
                                                <p class="mb-0 text-black font-weight-bold">
                                                    <a href="#">
                                                    </a><a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <div class="media-body">
                                                <a href="#">
                                                    <i class="icofont-mastercard icofont-4x"></i>
                                                </a>
                                                <a href="#">
                                                    <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                    <p>VALID TILL 10/2025</p>
                                                </a>
                                                <p class="mb-0 text-black font-weight-bold">
                                                    <a href="#">
                                                    </a><a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <div class="media-body">
                                                <a href="#">
                                                    <i class="icofont-visa icofont-4x"></i>
                                                </a>
                                                <a href="#">
                                                    <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                    <p>VALID TILL 10/2025</p>
                                                </a>
                                                <p class="mb-0 text-black font-weight-bold">
                                                    <a href="#">
                                                    </a><a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <div class="media-body">
                                                <a href="#">
                                                    <i class="icofont-mastercard icofont-4x"></i>
                                                </a>
                                                <a href="#">
                                                    <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                    <p>VALID TILL 10/2025</p>
                                                </a>
                                                <p class="mb-0 text-black font-weight-bold">
                                                    <a href="#">
                                                    </a><a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-md-6">
                                <div class="bg-white card payments-item shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <div class="media-body">
                                                <a href="#">
                                                    <i class="icofont-american-express icofont-4x"></i>
                                                </a>
                                                <a href="#">
                                                    <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                    <p class="text-black">VALID TILL 10/2025</p>
                                                </a>
                                                <p class="mb-0 text-black font-weight-bold">
                                                    <a href="#">
                                                    </a><a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white card payments-item shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <div class="media-body">
                                                <a href="#">
                                                    <i class="icofont-visa icofont-4x"></i>
                                                </a>
                                                <a href="#">
                                                    <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                    <p>VALID TILL 10/2025</p>
                                                </a>
                                                <p class="mb-0 text-black font-weight-bold">
                                                    <a href="#">
                                                    </a><a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
