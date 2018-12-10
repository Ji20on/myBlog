<!DOCTYPE html>
<html lang="en">
<head>
	<title> @yield('title')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- bootstrap --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootswatch.min.css') }}">
  {{-- fontawesome --}}
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  {{-- hover --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/hover-min.css') }}">
  {{-- animate --}}
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
  {{-- font --}}
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  {{-- custom css --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  {{-- jquery --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

@include('partials.header')


@yield('content')


@include('partials.footer')


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script>
  new WOW().init();
</script>
</body>
</html>