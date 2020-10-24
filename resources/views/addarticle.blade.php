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
        <form action="/article/create" method="post">
                @csrf
                    <div class="form-group"><br><br>
                        <label for="title">Artikel </label>
                        <input type="text" class="form-control"required="required" name="title" placeholder="Add Country Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="image">Image Url</label>
                        <input type="text" class="form-control"required="required" name="image" placeholder="Add Link Image Here"></br>
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
