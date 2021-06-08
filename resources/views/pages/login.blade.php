@extends('layouts.layout')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('content')

<div class="container c-login">
    <form action="{{ route('login') }}" method="POST" class="form-signin">
        @csrf

        @if(session('loginErr'))
            <p class="loginErr" style="color: #FF5145">{{ session('loginErr') }}</p>
        @endif

        <div>
            <i class="fas fa-spa"></i>
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        </div>

        <div>
            <input type="text" class="form-control" placeholder="Username"
            name="username" autofocus>
            @error('username')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror

            <input type="password" class="form-control" placeholder="Password"
            name="password">
            @error('password')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror
        </div>
        <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign in</button>

        <a href="">
            <p class="">Nemate nalog?</p>
        </a>
    </form>
</div>

<script>
    setTimeout(() => {
        document.querySelector('.loginErr').style.display = 'none'
    }, 3000)
</script>
@endsection