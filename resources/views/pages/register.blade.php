@extends('layouts.layout')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('content')

<div class="container c-login">
    <form action="{{ route('register') }}" method="POST" class="form-signin">
        @csrf

        <div>
            <i class="fas fa-spa"></i>
            <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        </div>

        <div>
            <input 
                type="text" 
                name="username"
                class="form-control" placeholder="Username"
                value="{{ old('username') }}"
                autofocus
            >
            @error('username')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror

            <input 
                type="email" 
                name="email" 
                class="form-control" placeholder="Email"
                value="{{ old('email') }}"
            >
            @error('email')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror

            <input 
                type="password" 
                name="password" class="form-control" placeholder="Password"
            >
            @error('password')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror
            <input 
                type="password" name="password_confirmation" class="form-control" placeholder="Repeat password"
            >
        </div>
        <button class="btn btn-lg btn-block mt-4" type="submit">Register</button>

        <a href="">
            <p class="">Back to Login page</p>
        </a>
    </form>
</div>

@endsection