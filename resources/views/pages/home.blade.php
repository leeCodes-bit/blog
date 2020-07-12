@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endpush
@section('content')
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <main role="main" class="inner cover">
      <h1 class="cover-heading">Welcome to eel's blog.</h1>
      <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
      <p class="lead">
        <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
      </p>
    </main>

  </div>
@endsection
        
 
