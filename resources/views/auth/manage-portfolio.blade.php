@extends('layouts.my-admin')
@section('title','admin')
@section('content')

<div class="container manage-port">
  {{-- error --}}
  @if(count($errors)>0)
  @foreach($errors->all() as $error);
  <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{$error}}</strong>
  </div>
  @endforeach
  @endif
  {{-- success --}}
  @if(Session::has('msg'))
  <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{Session::get('msg')}}</strong>
  </div>
  @endif

  <h3>Add New Portfolio</h3> <br> <br>
  <form action="add-port" method="Post" enctype="multipart/form-data" >
    @csrf
    <div class="row">
      <div class="col col-md-9">
        <div class="form-group">
          <input name="title" type="text" class="form-control" id="port-title" placeholder="Enter Portfolio Title">
        </div>
        <div class="form-group">
          <input name="category" type="text" class="form-control" id="port-category" placeholder="Enter Portfolio Category">
        </div>
        <div class="form-group">
          <textarea name="desc" class="form-control" id="port-desc" rows="3" placeholder="Content here..."></textarea>
        </div>
        <div class="form-group">
          <textarea name="content" class="form-control wysyg_editor" id="port-content" rows="10" placeholder="Content here..."></textarea>
        </div>
      </div>
      <div class="col col-md-3">
       <div class="form-group">
        <label for="port-thumb">Fearured Image</label>
        <input name="portthumb" type="text" class="form-control-file" id="port-thumb" aria-describedby="fileHelp">
        <img src="" id="preview">
      </div>
      <div class="form-group pull-right">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
    </div>
  </div>
</form>
</div>




@endsection