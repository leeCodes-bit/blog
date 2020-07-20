@extends('layouts.master')
@push('css')
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@section('content')
  <h1>Create post</h1>
  <form action="{{route('posts.store')}}" method="POST">
    {{csrf_field()}}
    <div class="form-input">
        <input type="text" class="form-control" name="title" id="title" placeholder="title">
    </div>
    <div class="form-input">
        <label for="body"></label>
        <textarea name="body" id="article-ckeditor" class="form-control" placeholder="Text Body" id="" cols="50" rows="10"></textarea>
    </div>
    <div class="form-input">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
@endsection