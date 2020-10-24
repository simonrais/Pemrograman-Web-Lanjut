<!-- Menghubungkan view template master -->
@extends ('master')

<!--Isi bagian judul halaman -->
@section ('Judul Halaman','Halaman About')

<!-- Isi bagian Konten -->

@section ('konten')
<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h2 class="display-4 mb">About Me</h2>
      <h2 class="display-4 mb"></h2>
      <p class="lead">
   <!--    <img class="card-img-top" src="simon.jpg" > -->
      <br>Nama      : Simon Rais Sihombing<br>
      Kelas     : MI-2F <br>
      NIM       : 1931710183 <br>
      Prodi     : D-III Manajemen Informatika <br>
      Asal      : Pekanbaru Riau  <br>
      
      </p>
    </div>
  </div>
</section>
	
@endsection