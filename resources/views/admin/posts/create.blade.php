@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nome Autore</label>
            <input type="text" class="form-control" id="name" name="author_name" value="{{old('author_name')}}">
          </div>
          <div class="form-group col-md-6">
            <label for="surname">Cognome Autore</label>
            <input type="text" class="form-control" id="surname" name="author_lastname" value="{{old('author_lastname')}}">
          </div>
        </div>
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
          <label for="post">Post</label>
          <textarea rows="10" class="form-control" id="post" name="content" value="{{old('content')}}"></textarea>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="published" name="is_published">
            <label class="form-check-label" for="published">
              Pubblica
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
  </div>
@endsection