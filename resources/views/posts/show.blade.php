@extends('layouts.master')

@section('content')
<a href="/posts" class="btn btn-primary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

<form action="{{route('posts.destroy', $post->id)}}" method="POST" class="pull-right">
    {{csrf_field()}}
    <div class="form-input">
        <input type="hidden" name="_method" value="DELETE">
    </div>
    <button type="submit" name="submit" class="btn btn-danger">Delete</button>
</form>
@endsection