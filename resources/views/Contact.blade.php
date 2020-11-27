<!-- Menghubungkan view template master -->
@extends ('layouts.app')

<!--Isi bagian judul halaman -->
@section ('Judul Halaman','Halaman About')

<!-- Isi bagian Konten -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">PHOTOGRAPHY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        {{-- Menyembunykan halaman Home dari user, ketika admin login --}}
        {{-- <li class="nav-item active">
          <a class="nav-link" href="dashboard">Home
            <span class="sr-only">(current)</span>
          </a>
        </li> --}}

        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
          @can('user-display')
          <a class="nav-link" href="dashboard">Home</a>
          @endcan
        </li>

        {{-- Menyembunykan Home dari halaman about, ketika user login --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li> --}}

        <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
          @can('user-display')
          <a class="nav-link" href="about">About</a>
          @endcan
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>

        {{-- Menyembunykan Manage dari halaman user, ketika user login --}}
        <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}"> 
          @can('manage-articles')
          <a class="nav-link" href="{{ route('manage') }}">Manage</a>
          @endcan
        </li>
        
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>




{{--  --}}
@section('content')
<div class="col-lg-8" style="margin: auto; width :100%;">
    <div class="card-header text-center">
        <h3 > Contact </h3>
    </div>
    <div class="card" style="padding: 0 20px 8px;">

        </br>  
        <div class="card body">    
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Information Contact </th>
                    {{-- <th colspan="2" style="text-align: center;"></th> --}}
                    {{-- <th>Keterangan</th> --}}
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 
                      <h2> </h2> 
                      Email                : simonrais@gmail.com<br>
                      Instagram            : @simon_Rais <link><br>
                      Pinterest 		       : simon rais <br>
                      WhatsApp             : 0822 5608 5623 <br>
                      Youtube Channel      : simon rais  
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>
        <br>
        {{-- <a href="/articles/add" class="btn btn-primary">Tambah Data</a><br> --}}
        <br>
        <a href="dashboard" class="btn btn-primary " style="background-color:#00b8a9">Home</a>
        <br>
    </div>
    <div class="box" style="position: static" >
        <p align="center" style="padding-top: 25px;padding-left: 0px"></p>
          <p id="contact" align="center" style="padding-left: 0px"> <b>Contact </b> </p>
          <p align="center" style="padding-left: 0px"> @2020 by Landgraph .<br>Proudly crated with love
        <p align="center" style="padding-left: 0px;"> landgraph@gmail.com</p>
      </div>
</div>    
@endsection

{{-- @section ('konten')
<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h2 class="display-4 mb">Contact Me</h2>
      <p class="lead">
   <!--    <img class="card-img-top" src="simon.jpg" > -->

    
     
    </div>
  </div>
</section>
	
@endsection --}}