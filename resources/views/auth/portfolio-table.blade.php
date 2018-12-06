@extends('layouts.my-admin')
@section('title','admin')
@section('content')



{{-- SUCCESS --}}
<div class="container">
  @if(Session::has('msg'))
  <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{Session::get('msg')}}</strong>
</div>
@endif
</div>

<div class="container port-table">
    <h2>Portfolios</h2> <a href="manage-portfolio" type="button" class="btn btn-primary">Add New</a> <br><br>
    <div class="row">
        <div class="col">
            <table id="portfolio_id" class="display">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Content</th>
                        <th>Thumbnail Image</th>
                        <th>Modify</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach (App\Portfolio::get_portfolios_post() as $port_post)

                 <tr>
                    <td>{{$port_post->title}}</td>
                    <td>{{$port_post->category}}</td>
                    <td>{{str_limit($port_post->description, 20)}}</td>
                    <td>{{str_limit($port_post->content, 20)}}</td>
                    <td><img class="img-fluid" style="width: 50px; height: 50px;" src="{{$port_post->port_thumb}}"></td>
                    <td>{{$port_post->id}}</td>
                    <td>
                        <a href="edit-portfolio/{{$port_post->id}}" type="button" class="btn btn-success">Edit</a>
                        <button onclick="deletePortfolio({{$port_post->id}})" type="button" class="btn btn-danger" data-toggle="modal" data-target="#del-port">Delete</button>
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
    <form action="{{ route('deletePortfolio') }}" method="POST">
        @csrf 
        @method('DELETE')
        <input id="delete_id" type="hidden" name="portfolio_id">
        <button type="submit" class="btn btn-success">Yes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
    </form>
</div>
</div>
</div>
</div>

@endsection