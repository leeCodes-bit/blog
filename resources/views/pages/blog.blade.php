@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@section('content')
<h1>{{$title}}</h1>
    @if (count($services) > 0)
    <ul class="list-group">
        @foreach ($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
    </ul>
    @endif
@endsection
        
