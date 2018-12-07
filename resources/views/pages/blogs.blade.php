  @extends('layouts.my-template')
  @section('title','Mark Jason Landicho')
  @section('content')

  <div class="container all-blog">
  	<div class="row">
  		@foreach(App\Blog::get_blog_post() as $allBlog)
  		<div class="col col-md-6">
  			<div class="card blog-card">
  				<h2>{{str_limit($allBlog->title, 20)}}</h2>
  				<hr>
  				<h5 class="card-title">{{str_limit($allBlog->author, 20)}}<span class="pull-right">{{$allBlog->created_at->format('M d, Y | h:i A')}}</span></h5>
  				<img class="img-fluid" src="{{ asset($allBlog->blog_thumb) }}"> <br>  <br>
  				<div class="card-body">
  					{!!str_limit($allBlog->description,200)!!} <br>
  				</div>
  				<div class="car-footer">
  					<a href="{{ route('blog_link',['slug'=>$allBlog->slug]) }}" class="btn btn-primary pull-right">Read More</a>
  				</div>
  			</div>
  		</div>
  		@endforeach
  	</div>
  </div>

  @endsection
