@extends('layouts.master')

@section('content')
    <h1>Posts</h1>

        @if (count($posts) > 1)
        <ul class="list-group">
            @foreach ($posts as $post)
                <div class="well list-group-item">
                <h3><a href="./posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
        </ul>
        @else
            <p>No post found</p>
        @endif

@endsection