  @extends('layouts.my-template')
  @section('title','Mark Jason Landicho')
  @section('content')

  <div class="container margin-up-down">
  	<div class="row">
  		<div class="col col-md-6">
  			<h2>{{$portfolio->title}}</h2>
  			<hr>
  			<span class="">{{$portfolio->category}}</span> <br><br>
  			<p>{{$portfolio->description}}</p>
  		</div>
  		<div class="col col-md-6">
  			<img class="img-fluid" src="{{ asset($portfolio->port_thumb) }}">
  		</div>
  		<div class="col col-md-12">
  			{!!$portfolio->content!!}
  		</div>
  	</div>
  </div>

  <div class="container">
  	<h3 class="text-center">More Portfolios</h3>
  	<hr class="style-one"><br>
  	<div class="row">
  		@foreach(App)
  		<div class="col-md-4">
  			<a href="portfolio-page">
  				<div class="card">
  					<img class="card-img-top" src="https://picsum.photos/150/100?image=2" alt="Card image cap">
  					<div class="card-body">
  						<h5 class="card-title">BANNER DESIGNS</h5>
  						<p class="card-text">promotion and ads for the website</p>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>
  </div>

  @endsection