<div class="container bc-wrap">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Home</a></li>
		@if(URL::current() == 'http://localhost:8000/about')
		<li class="breadcrumb-item active"><a href="{{ route('about') }}">About Me</a></li>
		@elseif(URL::current() == 'http://localhost:8000/portfolio')
		<li class="breadcrumb-item active"><a href="#">My Works</a></li>
		@elseif(isset($portfolio))
		<li class="breadcrumb-item active"><a href="{{ route('all-port') }}">My Works</a></li>
		<li class="breadcrumb-item active"><a href="#">{{$portfolio->title}}</a></li>
		@elseif(URL::current() == 'http://localhost:8000/blog')
		<li class="breadcrumb-item active"><a href="#">My Blogs</a></li>
		@elseif(isset($blog))
		<li class="breadcrumb-item active"><a href="{{ route('all-blog') }}">My Blogs</a></li>
		<li class="breadcrumb-item active"><a href="#">{{$blog->title}}</a></li>
		@endif
	</ol>
</div>