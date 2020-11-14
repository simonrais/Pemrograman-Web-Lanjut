@extends('layouts.app')
@section('title','add')

@section('content')

<div class="col-lg-8" style="margin: auto;">
    <div class="card-header text-center">
        <h3>Daftar Artikel</h3>
    </div>
    <div class="card" style="padding: 0 20px 8px;">

        <form action="/article/update/{{$article->id}}" method="post">
                @csrf
                    <div class="form-group"><br><br>
                        <label for="title">Judul</label>
                        <input type="text" class="form-control"required="required" name="title" value="{{ $article->title }}" placeholder="Add title Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control"required="required" name="content" value="{{ $article->content }}" placeholder="Add Content Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="image">Image Url</label>
                        <input type="file" class="form-control"required="required" name="image" value="{{ $article->imageurl }}" placeholder="Add Link Image Here"></br>
                        <img width="150px" src="{{asset('storage/'.$article->featured_image )}}">
                    </div>
                    <button type="submit" class="btn btn-primary float-center2" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true" ></i>  Update Content</button><br><br>
                {{-- Try on and--}}
                </form>
</div>
</div>
@endsection