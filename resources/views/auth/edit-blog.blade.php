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
  <h3>Edit Blog</h3> <br> <br>
  <form action="{{{ route('edit-save-blog',['id'=> $blog->id]) }}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="row">
      <div class="col col-md-8">
        <div class="form-group">
         <input name="id" value="{{$blog->id}}" type="hidden" class="form-control" id="blog-title" placeholder="Enter Post Title">
         <input name="title" value="{{$blog->title}}" type="text" class="form-control" id="blog-title" placeholder="Enter Post Title">
       </div>
       <div class="form-group">
        <input name="author" value="{{$blog->author}}" type="text" class="form-control" id="blog-author" placeholder="Enter Post author">
      </div>
      <div class="form-group">
        <textarea name="desc" class="form-control" id="port-desc" rows="10" placeholder="Content here...">{{$blog->description}}</textarea>
      </div>
    </div>
    <div class="col col-md-4">
     <div class="form-group">
      <label for="blog-thumb">Fearured Image</label>
      <input name="blogthumb" type="file" class="form-control-file" id="blog-thumb" aria-describedby="fileHelp">
      <img class="img-fluid" style="width: 100px; height: 50px;" src="{{ asset($blog->blog_thumb) }}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</div>
</form>
</div>

@endsection