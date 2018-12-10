
@extends('layouts.my-template')
@section('title','Mark Jason Landicho')
@section('content')

<!-- header -->
<header>
  {{-- wave bottom --}}
  <svg id="wave" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 91">
    <path class="cls-1" d="M1399.5,149.5" transform="translate(0 -209)"/><path class="cls-2" d="M0,261s281-80,600-25,470,40,550,25,250-52,250-52v91H0Z" transform="translate(0 -209)"/>
  </svg>
  <div class="container-fluid front-container">
    <div class="row">
      <div class="col col-xs-12 col-sm-12 col-md-6 name-wrapper">
        <h1 class="wow slideInLeft hvr-wobble-skew">Hi! Im Mark Jason Landicho</h1>
        <h3 class="wow slideInLeft hvr-wobble-skew">Front-End Web Developer</h3>
      </div>
      <div class="col col-sm-12 col-md-6 svg-wrapper">
        @include('partials.logo-svg');
      </div>
    </div>
  </div>
  {{-- background --}}
  <div id="particles-js"> 
  </div>

</header>




<!-- myworks-->
<div class="container myworks">
  <h3 class="text-center">my latest works</h3>
  <hr class="style-one"><br>
  <div class="row">
    @foreach(App\Portfolio::latest_port() as $portfolio)
    <div class="col-md-4 hvr-grow" data-wow-duration="2s" data-wow-delay="5s">
      <a href="{{ route('port_link',['slug'=>$portfolio->slug]) }}">
        <div class="card">
          <img class="card-img-top" src="{{ asset($portfolio->port_thumb) }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{str_limit($portfolio->title, 20)}}</h5>
            <p class="card-text">{{str_limit($portfolio->category, 20)}}</p>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</script>
<script>
  particlesJS.load('particles-js','js/particles.json', function(){
    console.log('particles.json loaded...');
  });
</script>

@endsection
