@extends('layouts.my-admin')
@section('title','admin')
@section('content')


<div class="container manage-port">
    <h3>Add New Portfolio</h3> <br> <br>
    <form>
        <div class="row">
            <div class="col col-md-8">
                <div class="form-group">
                    <input type="text" class="form-control" id="port-title" placeholder="Enter Portfolio Title">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="port-category" placeholder="Enter Portfolio Category">
              </div>
              <div class="form-group">
                  <textarea class="form-control" id="port-desc" rows="10" placeholder="Content here..."></textarea>
              </div>
          </div>
          <div class="col col-md-4">
           <div class="form-group">
              <label for="port-thumb">Fearured Image</label>
              <input type="file" class="form-control-file" id="port-thumb" aria-describedby="fileHelp">
          </div>
          <div class="form-group">
              <label for="port-gallery">Gallery Image</label>
              <input type="file" class="form-control-file" id="port-gallery" aria-describedby="fileHelp" multiple>
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Publish</button>
          </div>
      </div>
  </div>
</form>
</div>

@endsection