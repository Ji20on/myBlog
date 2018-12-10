<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary animated slideInDown">
  <div class="container">
    <a class="navbar-brand" href="/"><img class="img-fluid" src="{{ asset('img/solologo.png') }}" style="max-width: 60px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ml-auto">
        <li id="home" class="nav-item">
          <a class="nav-link" href="/">HOME<span class="sr-only">(current)</span></a>
        </li>
        <li id="about" class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About me</a>
        </li>
        <li id="works" class="nav-item">
          <a class="nav-link" href="{{ route('all-port') }}">my works</a>
        </li>
        <li id="blog" class="nav-item">
          <a class="nav-link" href="{{ route('all-blog') }}">my BLOG</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('downloadcv') }}">Download my CV</a></li>
      </ul>
      <ul class="navbar-nav navbar-right nav-icons">
        <li><a  href="https://www.facebook.com/Ji20on" target="_new" data-toggle="tooltip" data-placement="top" title="Facebook "><i class="fa fa-facebook-f fa-2x"></i></a></li>
       <li><a  href="https://www.instagram.com/ji20on/?hl=en" target="_new" data-toggle="tooltip" data-placement="top" title="Instagram "><i class="fa fa-instagram fa-2x"></i></a></li>
       <li><a  href="https://www.linkedin.com/in/mark-jason-landicho-bb5ab1138/" target="_new" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin fa-2x"></i></a></li>
       <li><a  href="https://plus.google.com/u/0/100269729438138254620" target="_new" data-toggle="tooltip" data-placement="top" title="Gmail"><i class="fa fa-envelope fa-2x"></i></a></li>
     </ul>
   </div>
 </div>
</nav>
