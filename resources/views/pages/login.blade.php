@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@section('content')
    <div class="form-data">
        <div class="form-title">
            <h1>Login to your account</h1>
        </div>
        <form action="" method="POST">
            <div class="form-input">
                <label for="username"></label>
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-input">
                <label for="password"></label>
                <input type="text" name="password" id="password" placeholder="password">
            </div>
            <div class="form-input">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <p>Don't have an account? <a href="signup.blade.php">Signup</a></p>
        </form>
    </div>
@endsection