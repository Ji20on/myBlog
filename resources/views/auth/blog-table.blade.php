@extends('layouts.my-admin')
@section('title','admin')
@section('content')

<div class="container port-table">
    <h2>Blog</h2> <a href="manage-blog" type="button" class="btn btn-primary">Add New</a> <br><br>
    <div class="row">
        <div class="col">
            <table id="blog_id" class="display">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Thumbnail Image</th>
                        <th>Modify</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(App\Blog::get_blog_post() as $blog)
                    <tr>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->author}}</td>
                        <td>{{$blog->description}}</td>
                        <td> <img class="img-fluid" style="width: 50px; height: 50px;" src="{{$blog->blog_thumb}}">
                            </td>
                        <td>
                            <a href="edit-blog/{{$blog->id}}" type="button" class="btn btn-success">Edit</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del-port">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- delete modal -->
<div class="modal fade" id="del-port">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete this Portfolio?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <button type="button" class="btn btn-success">Yes</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
</div>
</div>
</div>
</div>

@endsection