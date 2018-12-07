  @extends('layouts.my-template')
  @section('title','Mark Jason Landicho')
  @section('content')

  <div class="container port-details">
  	<div class="row">
  		<div class="col-sm-12 col-md-6">
  			<h2>{{$portfolio->title}}</h2>
  			<hr>
  			<span class="">{{$portfolio->category}}</span> <br><br>
  			<p>{{$portfolio->description}}</p>
  		</div>
  		<div class="col-sm-12 col-md-6">
  			<img class="img-fluid" src="{{ asset($portfolio->port_thumb) }}">
  		</div>
  	</div>
  </div>

  {{-- Content --}}
  <div class="container port-content">
        {!!$portfolio->content!!}
  </div>

  <div class="container more-port">
  	<h3 class="text-center">More Portfolios</h3>
  	<hr class="style-one"><br>
  	<div class="row">
      @foreach(App\Portfolio::out_of_port($portfolio->id) as $outOfP)
      <div class="col-md-4">
       <a href="{{ route('port_link',['slug'=>$outOfP->slug]) }}">
        <div class="card">
         <img class="card-img-top" src="{{ asset($outOfP->port_thumb) }}" alt="Card image cap">
         <div class="card-body">
          <h5 class="card-title">{{str_limit($outOfP->title, 20)}}</h5>
          <p class="card-text">{{str_limit($outOfP->category, 20)}}</p>
        </div>
      </div>
    </a>
  </div>
  @endforeach
{{-- {{App\Portfolio::out_of_port($portfolio->id)}} --}}
</div>
</div>
@endsection