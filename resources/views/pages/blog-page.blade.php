  @extends('layouts.my-template')
@section('title','Mark Jason Landicho')
@section('content')


<div class="container margin-up-down">
	<div class="row">
		<div class="col col-md-8 offset-md-2 blog-card">
			<h2>Wholesaler Website</h2>
			<hr>
			<h5 class="card-title">Card title</h5>
			<img class="img-fluid" src="img/teck.png"> <br>  <br>
			<div class="card-body">
				<p class="">I designed a map-based flight search website that empowers Qantas travellers to browse flights based on their budget and desired travel times. The primary goal of this product is to show Frequent Flyers where they can go with their points.
				</p>
			</div>
		</div>
	</div>
</div>

<div class="container margin-up-down">
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

<div class="container">
	<h3 class="text-center">Related Blogs</h3>
	<hr class="style-one"><br>
	<div class="row">
		<div class="col-md-4">
			<a href="blog-page">
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