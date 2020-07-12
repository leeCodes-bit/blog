@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@section('content')
    <div class="form-data">
        <div class="form-title">
            <h1>Sign up to own a blog</h1>
        </div>
        <form action="" method="POST">
            <div class="form-input">
                <label for="username"></label>
                <input type="text" name="username" id="username" placeholder="Username">
            </div><div class="form-input">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Enter Email Address">
            </div>
            <div class="form-input">
                <label for="password"></label>
                <input type="password" name="password1" id="password" placeholder="Enter Password">
            </div>
            <div class="form-input">
                <label for="password"></label>
                <input type="password" name="password2" id="password" placeholder="Confirm Password">
            </div>
            <div class="form-input">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <p>Already have an account? <a href="login.blade.php">Login</a></p>
        </form>
    </div>
@endsection