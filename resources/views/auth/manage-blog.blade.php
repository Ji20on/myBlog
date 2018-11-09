@extends('layouts.my-admin')
@section('title','admin')
@section('content')




<div class="container manage-blog">
  {{-- ERROR --}}
  @if(count($errors)>0)
  @foreach($errors->all() as $error);
  <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>{{$error}}</strong>
</div>
  @endforeach
  @endif
  {{-- SUCCESS --}}
  @if(Session::has('msg'))
  <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{Session::get('msg')}}</strong>
  </div>
  @endif
  <h3>Add New Blog</h3> <br> <br>
  <form action="add-blog" method="Post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col col-md-8">
        <div class="form-group">
          <input name="title" type="text" class="form-control" id="blog-title" placeholder="Enter Post Title">
        </div>
        <div class="form-group">
          <input name="author" type="text" class="form-control" id="blog-author" placeholder="Enter Post author">
        </div>
        <div class="form-group">
          <textarea name="desc" class="form-control" id="port-desc" rows="10" placeholder="Content here..."></textarea>
        </div>
      </div>
      <div class="col col-md-4">
       <div class="form-group">
        <label for="blog-thumb">Fearured Image</label>
        <input name="blogthumb" type="file" class="form-control-file" id="blog-thumb" aria-describedby="fileHelp">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
    </div>
  </div>
</form>
</div>

@endsection