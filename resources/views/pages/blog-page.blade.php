 @extends('layouts.my-template')
 @section('title','Mark Jason Landicho')
 @section('content')

 @include('partials.breadcrumbs')
 <input type="hidden" id="link-page" value="blog">
 <div class="container blog-wrap">
 	<div class="row">
 		<div class="col col-md-8 offset-md-2 blog-card">
 			<h2>{{$blog->title}}</h2>
 			<hr>
 			<h5 class="card-title">By {{$blog->author}}<span class="pull-right">{{$blog->created_at->format('M d, Y | h:i A')}}</span></h5>
 			<img class="img-fluid" width="100%" src="{{ asset($blog->blog_thumb) }}"> <br>  <br>
 			<div class="card-body">
 				{!!$blog->description!!}
 			</div>
 		</div>
 	</div>
 </div>

 <div class="container comments-section">
 	<div class="row">
 		<div class="col col-md-8 offset-md-2">

 			<div id="disqus_thread"></div>
 			<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = 'http://localhost/mywebsite/blog-page.php'; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = 'blog-page'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://markjasonlandicho.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
</div>
</div>

<div class="container more-blogs">
	<h3 class="text-center">More Blogs</h3>
	<hr class="style-one"><br>
	<div class="row">
		@foreach(App\Blog::out_of_blog($blog->id) as $outOfB)
		<div class="col-md-4">
			<a href="{{ route('blog_link',['slug'=>$outOfB->slug]) }}">
				<div class="card">
					<img class="card-img-top" src="{{ asset($outOfB->blog_thumb) }}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{str_limit($outOfB->title, 20)}}</h5>
						<p class="card-text">{{str_limit($outOfB->author, 20)}}</p>
					</div>
				</div>
			</a>
		</div>
		@endforeach
	</div>
</div>

@endsection