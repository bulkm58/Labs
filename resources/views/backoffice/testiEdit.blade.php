@extends('adminlte::page')

@section('content')
    <div class="container">
<form name="" action="{{route("testi.store")}}" method="POST" enctype="multipart/form-data" >
    @csrf

  <div class="form-group d-flex row">
    <label class="mr-3 mt-2" for="">Auteur:</label> 
    <input class="form-control w-25 mr-3" required="required" type="input" name="auteur">
    <label class="mr-3 mt-2" for="">Role:</label> 
    <input class="form-control w-25 mr-3" required="required" type="input" name="role">
    <label class="mr-3 mt-2" for="">Photo:</label> 
    <input class="form-control w-25 mr-3" required="required" type="file" name="photo">
    <div class="d-flex">
    <label class="mr-3 mt-2 pt-3" for="">Ajouter un commentaire:</label> </div> 
    <div class="col-sm-12 d-flex">
    <textarea class="form-control w-25 mr-3" required="required" type="text" name="comm"></textarea></div>
    <input type="submit" value="Add" class="btn btn-primary m-2">
  </div><!-- close .form-group -->
</form>
  </div>
</div>
<div class="container">
<table class="table table-striped">
  <thead>
  <tr class="center">
    <th>Photo</th>
    <th>Auteur</th>
    <th>Role</th>
    <th>Commentaire</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
      @foreach ( $testi as $item)
      <tr>
      <td><img class="w-25" src="{{asset('storage/'.$item->photo)}}"></td>
      <td>{{$item->auteur}}</td>
      <td>{{$item->role}}</td>
      <td> {{$item->comm}}</td>
      <td><a href="{{route('delete',$item->id)}}" class="btn btn-primary">Delete</a></td>
      </tr>
      @endforeach

  </tbody>
</table>
</div>

@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">

@endsection
