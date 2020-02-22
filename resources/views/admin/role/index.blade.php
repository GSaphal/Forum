@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
<a href="/admin/roles/create"><button class="btn btn-primary mb-3">Add Roles</button></a>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>     
     <th scope="col">ID</th>
      <th scope="col">Role Name</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($roles as $role)
    <tr>
    <td>{{$role->id??''}}</td>
    <td>{{$role->name??''}}</td>
  
    <td>
    <a href="roles/edit/{{$role->id}}"><button class="btn btn-info">Edit</button></a>
    <a href="roles/permissions/{{$role->id}}"><button class="btn btn-secondary">View Permissions</button></a>
    <a href="roles/delete/{{$role->id}}"> <button class="btn btn-danger">Delete</button></td></a>
    </tr>
    @endforeach

  </tbody>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop   