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

  <h3>Edit Portfolio</h3> <br> <br>
  <form action="{{route('edit-save-port',['id'=> $portfolio->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row">
      <div class="col col-md-8">
        <div class="form-group">
          <input name="id" value="{{$portfolio->id}}" type="hidden" class="form-control" id="blog-title" placeholder="Enter Post Title">
          <input name="title" value="{{$portfolio->title}}" type="text" class="form-control" id="port-title" placeholder="Enter Portfolio Title">
        </div>
        <div class="form-group">
          <input name="category" value="{{$portfolio->category}}" type="text" class="form-control" id="port-category" placeholder="Enter Portfolio Category">
        </div>
        <div class="form-group">
          <textarea name="desc" class="form-control" id="port-desc" rows="3" placeholder="Content here...">
            {{$portfolio->description}}</textarea>
          </div>
        </div>
        <div class="col col-md-4">
         <div class="form-group">
          <label for="port-thumb">Fearured Image</label>
          <input name="portthumb" type="text" class="form-control-file" value="{{$portfolio->port_thumb}}" id="port-thumb" aria-describedby="fileHelp">
          <img id="preview" style="width: 100px; height: 50px;" src="{{ asset($portfolio->port_thumb) }}">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea name="content" class="form-control wysyg_editor" id="port-content" rows="10" placeholder="Content here...">{{$portfolio->content}}</textarea>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</form>
</div>

@endsection