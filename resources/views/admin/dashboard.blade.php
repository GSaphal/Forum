@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>     
     <th scope="col">ID</th>

      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
  @foreach($user as $users)
    <tr>
    <td>{{$users->id??''}}</td>

    <td>{{$users->name??''}}</td>
    <td>{{$users->email??''}}</td>
    @foreach($users->role()->pluck('name') as $role)
    <td>{{$role}}</td>
    @endforeach
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