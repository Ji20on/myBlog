	<!DOCTYPE html>
	<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title> @yield('title') </title>

		<!-- Bootstrap core CSS-->
		<link href="{{ asset('css/bootswatch.min.css') }}" rel="stylesheet">

		<!-- Custom fonts for this template-->
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

		<!-- Custom styles for this template-->
		<link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="{{ asset('css/admin-style.css') }}" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>


		@include('partials.admin-header')


		@yield('content')


		@include('partials.admin-footer')




		<!-- Custom scripts for all pages-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/sb-admin.min.js') }}"></script>
		<script src="{{ asset('js/admin-custom.js') }}"></script>
		<script>
			$(document).ready( function () {
				$('#portfolio_id, #blog_id').DataTable();
			} );

			function deleteBlog(id){
				document.getElementById('delete_id').value = id;
			}
			

	</script>


</body>
</html>