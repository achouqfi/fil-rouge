@extends('layouts.sidebar')

@section('content')

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>HOTEL LIST</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addHotel" class="btn btn-success" data-toggle="modal">Add New Employee</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Adresse</th>
                            <th>Description</th>
                            <th>Photos</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i =0;
                        @endphp
                        @foreach ($hotels as $hotel)
                        <tr>
                            <form action="{{ url('AdminUpdateHotel/'.$hotel->id) }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <td>
                                    <label>{{ $hotel->id }}</label><input type="hidden" value="{{ $hotel->id }}" name="id" >
                                </td>
                                <td>
                                    <label id="name<?=$i?>" for="">{{ $hotel->hotelName  }}</label>
                                    <input type="inputName" id="inputName<?=$i?>" value="{{ $hotel->hotelName }}" name="name" style="display:none" >
                                </td>
                                <td>
                                    <label id="adresse<?=$i?>" >{{ $hotel->hotelAdresse  }}</label>
                                    <input type="text" id="inputAdresse<?=$i?>" value="{{ $hotel->hotelAdresse }}" name="adresse" style="display:none" >
                                </td>
                                <td>
                                    <label id="description<?=$i?>" >{{ $hotel->hotelDescription  }}</label>
                                    <input type="text" id="inputDescription<?=$i?>" value="{{ $hotel->hotelDescription }}" name="description" style="display:none" >
                                </td>
                                <td> <a href="{{ url('adminPhotoHotel/'.$hotel->id) }}"  id="photos<?=$i?>" class="btn btn-warning btn-md photo" > Add photo</a></td>
                                <td class="actionBtn">
                                    <a  onclick='modifie(<?=$i?>)' id="btnedit<?=$i?>" class="btn btn-info btn-md"> Update</a>
                                    <a href="#deleteHotel" id="btndlt<?=$i?>" class="btn btn-danger btn-md" data-toggle="modal">Delete</a>
                                    <input type="submit"  class="btn btn-success" class="saveInput" id="btnsave<?=$i?>" value="save" style="display:none">
                                    <a type="text"  class="btn btn-warning" id="btncancel<?=$i?>" onclick='cancel(<?=$i?>)' style="display:none">annuler</a>
                                </td>
                            </form>
                        </tr>
                        <?=$i++?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
    <!-- Add -->
    <div id="addHotel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
				<form action="{{ url('AdminAddHotel') }}" method="POST" enctype="multipart/form-data">
					@csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Add New Hotel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" name="adresse" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" required></textarea>
                        </div>					
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit"  class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete -->
    <div id="deleteHotel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">						
                    <h4 class="modal-title">Delete Hotel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <p>Are you sure ?</p>
                    <p class="text-danger">This action cannot be undone.</p>
                </div>
                <form action="{{ url('AdminDltHotel/'.$hotel->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection

<script>
    function modifie(e){
    document.getElementById('name'+e).style.display="none";
    document.getElementById('inputName'+e).style.display="block";
    document.getElementById('adresse'+e).style.display="none";
    document.getElementById('inputAdresse'+e).style.display="block";
    document.getElementById('description'+e).style.display="none";
    document.getElementById('inputDescription'+e).style.display="block";
    document.getElementById('btnedit'+e).style.display="none";
    document.getElementById('btndlt'+e).style.display="none";
    document.getElementById('photos'+e).style.display="none";
    document.getElementById('btnsave'+e).style.display="block";
    document.getElementById('btncancel'+e).style.display="block";
    }

    function cancel(e)
    {
        document.getElementById('name'+e).style.display="block";
        document.getElementById('inputName'+e).style.display="none";
        document.getElementById('adresse'+e).style.display="block";
        document.getElementById('inputAdresse'+e).style.display="none";
        document.getElementById('description'+e).style.display="block";
        document.getElementById('inputDescription'+e).style.display="none";
        document.getElementById('btnedit'+e).style.display="block";
        document.getElementById('btndlt'+e).style.display="block";
        document.getElementById('photos'+e).style.display="block";
        document.getElementById('btnsave'+e).style.display="none";
        document.getElementById('btncancel'+e).style.display="none";
    }
</script>


