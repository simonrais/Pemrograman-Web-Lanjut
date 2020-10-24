<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
		<header>
			
			<h2>Landgraph Portofolio</h2>

			<nav>
				<a href="dashboard">Home </a> |
				<a href="/about">About </a> |
				<a href="/contact">Contact</a>
				<a href="/manage">Manage</a>

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