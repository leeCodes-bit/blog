@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@section('content')
    <div class="form-data">
        <div class="form-title">
            <h1>For futher info, contact us</h1>
        </div>
        <form action="" method="POST">
            <div class="form-input">
                <label for="username"></label>
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-input">
                <label for="email"></label>
                <input type="email" name="email" id="password" placeholder="Enter Email">
            </div>
            <div class="form-input">
                <textarea name="Message" placeholder="Message"></textarea>
            </div>
            <div class="form-input">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection