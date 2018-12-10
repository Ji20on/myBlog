  @extends('layouts.my-template')
  @section('title','Mark Jason Landicho')
  @section('content')

  @include('partials.breadcrumbs')
  <div class="container myworks">
    <div class="row">
      @foreach(App\Portfolio::get_portfolios_post() as $allPort)
      <div class="col-sm-12 col-md-6 col-lg-4 hvr-grow" data-wow-duration="2s" data-wow-delay="5s">
        <a href="{{ route('port_link',['slug'=>$allPort->slug]) }}">
          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset($allPort->port_thumb) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{str_limit($allPort->title, 20)}}</h5>
              <p class="card-text">{{str_limit($allPort->category, 20)}}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>

  @endsection