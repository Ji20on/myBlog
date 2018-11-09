  @extends('layouts.my-template')
@section('title','Mark Jason Landicho')
@section('content')


  <div class="container myworks">
    <div class="row">
      <div class="col-md-4 hvr-grow" data-wow-duration="2s" data-wow-delay="5s">
        <a href="portfolio-page">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/150/100?image=3" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">UX & UI DESIGN</h5>
            <p class="card-text">Quotation system</p>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>

  @endsection