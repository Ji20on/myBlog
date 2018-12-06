  @extends('layouts.my-template')
@section('title','Mark Jason Landicho')
@section('content')


  <div class="container myworks">
    <div class="row">
      @foreach(App\Portfolio::get_portfolios_post() as $allPort)
      <div class="col-md-4 hvr-grow" data-wow-duration="2s" data-wow-delay="5s">
        <a href="{{ route('port_link',['slug'=>$allPort->slug]) }}">
        <div class="card">
          <img class="card-img-top" src="{{ asset($allPort->port_thumb) }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$allPort->title}}</h5>
            <p class="card-text">{{$allPort->category}}</p>
          </div>
        </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>

  @endsection