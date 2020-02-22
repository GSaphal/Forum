@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Permission</h1>
@stop

@section('content')
<h4>Add a New Permission</h4>
<form class="col-md-3" method="POST" action="create/submit">
@csrf
<div class="form-group py-3">
    <label for="role_name">Permission Name</label>
    <input type="text" name="permission_name" class="form-control" id="permission" value="{{$permission->name}}">
  </div>
  <button type="submit" class="btn btn-primary mt-3">Save</button> 
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop   