@extends('layouts.my-admin')
@section('title','admin')
@section('content')


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
                        <th>Thumbnail Image</th>
                        <th>Gallery</th>
                        <th>Modify</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Wholesaler</td>
                        <td>Web Design</td>
                        <td>lorem ipsum...</td>
                        <td>image</td>
                        <td>23</td>
                        <td>
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del-port">Delete</button>
                        </td>
                    </tr>
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