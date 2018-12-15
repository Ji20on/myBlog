  @extends('layouts.my-template')
  @section('title','Mark Jason Landicho')
  @section('content')


 @include('partials.breadcrumbs')
  <input type="hidden" id="link-page" value="port">
  <div class="container port-details">
  	<div class="row">
  		<div class="col-sm-12 col-md-6">
  			<h2>{{$portfolio->title}}</h2>
  			<hr>
  			<span class="">{{$portfolio->category}}</span> <br><br>
  			<p>{{$portfolio->description}}</p>
  		</div>
  		<div class="col-sm-12 col-md-6">
        <div id="box" class="box" >
        </div>

       {{--  <button type="button" onclick="myFunction('{{$portfolio->port_thumb}}')">Set the background image of div</button> --}}

  			{{-- <img id="scroll" class="img-fluid" src="{{ asset($portfolio->port_thumb) }}" alt="http://markjasonlandicho.ml/laravel-filemanager/img/2/first-portfolio.jpg"> --}}
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
         <img class="card-img-top" src="{{ asset($outOfP->port_thumb) }}" alt="{{ asset($outOfP->port_thumb) }}">
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


<script>
/*var alt = link.getElementsByTagName('img')[0].getAttribute('alt');
    document.getElementById("box").style.backgroundImage = "url('asset($outOfP->port_thumb)')";*/
/*function myFunction(source) {
    document.getElementById("box").style.background = 'url('+source+')';
}*/
$(document).ready(function(){
  $('#box').css('background-image', 'url({{$portfolio->port_thumb}})');
});

</script>

@endsection
