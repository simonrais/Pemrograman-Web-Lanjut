@extends('layouts.app')
@section('title', 'manage')

@section('content')
<div class="col-lg-8" style="margin: auto; width :100%;">
    <div class="card-header text-center">
        <h3 > Daftar Artikel </h3>
    </div>
    <div class="card" style="padding: 0 20px 8px;">

        </br>  
        <div class="card body">    
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Tanggal</th>
                    <th colspan="2" style="text-align: center;">Action</th>
                    {{-- <th>Keterangan</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($article as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->title}}</td>
                        <td>{{substr($a->content,0 ,10)}}...</td>
                        <td>{{substr($a->imageurl,0, 10)}}</td>
                        <td>{{$a->updated_at}}</td>
                        <td>
                            <a href="article/edit/{{ $a->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#318fb5">Edit</a> &nbsp &nbsp
                        </td>
                        <td >
                            <a href="article/delete/{{ $a->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#ff5722">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                 </tbody>
            </table>
        </div>
        <br>
        <a href="/articles/add" class="btn btn-primary">Tambah Data</a><br>
        <a href="dashboard" class="btn btn-primary " style="background-color:#00b8a9">Home</a>
        <br>
    </div>
</div>    
@endsection