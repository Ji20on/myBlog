<!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary animated slideInDown">
    <!-- <a class="navbar-brand" href="#">MARK JASON LANDICHO</a> -->
    <a href="/"><img class="img-fluid" src="{{ asset('img/solologo.png') }}" style="max-width: 60px;"></a>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">HOME<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('all-port') }}">PORTFOLIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blogs">BLOG</a>
        </li>
        <li class="nav-item"><button type="button" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">DOWNLOAD CV</button></li>
      </ul>
{{--       <ul class="navbar-nav nav-right">
        <li class="nav-item"><button type="button" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">DOWNLOAD CV</button></li>
      </ul> --}}
    </div>
  </nav>