@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
<h4>Add a New Role</h4>
<form class="col-md-3" method="POST" action="create/submit">
<div class="form-group py-3">
    <label for="role_name">Role Name</label>
    <input type="text" name="role_name" class="form-control" id="role" placeholder="">
  </div>
 
  <div class="form-check form-check-inline">
  <label for="permission">Permission</label>

  @foreach($permission as $permissions)
@csrf
  <input class="form-check-input px-2" type="checkbox" id="permission" name="permission[]" value="{{$permissions->name}}">
 <label class="form-check-label" for="inlineCheckbox1">{{$permissions->name}}&nbsp;</label>
  @endforeach   
</div>
<br>
  <button type="submit" class="btn btn-primary mt-3">Save</button> 
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop   