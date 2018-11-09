<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<a class="navbar-brand mr-1" href="index.html">ADMIN</a>
		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			<i class="fa fa-bars"></i>
		</button>
		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-sign-out"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
					<a class="dropdown-item" href="#">Logout</a>
				</div>
			</li>
		</ul>
	</nav>

	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="sidebar navbar-nav" id="sidebar-id">
			<li class="nav-item">
				<a href="dashboard" class="nav-link" href="index.html">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{route('blog-table')}}" class="nav-link">
					<i class="fa fa-fw fa-folder"></i>
					<span>Manage Blogs</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="portfolio-table" class="nav-link" href="charts.html">
					<i class="fa fa-fw fa-folder"></i>
					<span>Manage Porfolios</span></a>
				</li>
			</ul>

			<div id="content-wrapper">