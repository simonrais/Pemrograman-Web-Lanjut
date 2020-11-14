@extends('layouts.app')
@section('title','add')

@section('content')

<div class="col-lg-8" style="margin: auto; width :100%;">
    <div class="card-header text-center">
        <h3>Tambah Artikel</h3>
    </div>
    <div class="card" style="padding: 0 20px 8px;">

        </br>
        </br>
    {{-- Menghandle File dengan menambahkan atribut enctpye pada form action--}} 
        <form action="/article/create" method="post" enctype="multipart/form-data">   
                @csrf
                    <div class="form-group"><br><br>
                        <label for="title">Artikel </label>
                        <input type="text" class="form-control"required="required" name="title" placeholder="Add Article Here"></br>
                    </div>
                    {{-- Mengubah type text menjadi file ini --}}
                    <div class="form-group">
                        <label for="image">Image Url</label>
                        <input type="file" class="form-control"required="required" name="image" placeholder="Add Link Image Here"></br>
                        
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control"required="required" name="content" placeholder="Add Content Here"></br>
                    </div>
                    <button type="submit" class="btn btn-primary float-center2" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true" ></i> Upload </button><br><br>
                </form>
</div>
</div>
@endsection
