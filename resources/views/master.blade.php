<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
		<header>
			
			<h2>Landgraph Portofolio</h2>

			<nav>
				@can('user-display')
				<a href="dashboard">Home </a> |
				@endcan

				@can('user-display')
				<a href="/about">About </a> |
				@endcan

				@can('user-display')
				<a href="/contact">Contact</a>
				@endcan

				@can('manage-articles')
				<a href="/manage">Manage</a>
				@endcan

			</nav>
		</header>
		<hr/>

		<!-- Bagian judul Halaman Master-->
		<h3> @yield('judulHalaman')</h3>

		<!-- Bagian Konten Halaman Master-->
		@section('konten')
		@show
		<br>
		<br>
		<br>
		<br>
		
		<hr>

		<footer>
			<p align="center"> simonrais18@gmail.com</p>
		</footer>
</body>
</html>