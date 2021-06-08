@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/product-edit.css') }}">

@section('content')

<div class="product-edit-header">
    <h1>
        Adding new user
    </h1>
</div>

<div class="container">
    <div class="row">
        <form class="m-5 form" action="" method="POST">
            @csrf
            <div class="mb-3">
                <i class="fas fa-user" style="color: #FF5145; font-size: 22px;"></i>
            </div>

            <input 
                type="text" 
                name="username"
                class="form-control mb-2" placeholder="Username"
                value="{{ old('username') }}"
                autofocus
            >
            @error('username')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror

            <input 
                type="email" 
                name="email" 
                class="form-control mb-2" placeholder="Email"
                value="{{ old('email') }}"
            >
            @error('email')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror

            <input 
                type="password" 
                name="password" class="form-control mb-2" placeholder="Password"
            >
            @error('password')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror
            <input 
                type="password" name="password_confirmation" class="form-control mb-2" placeholder="Repeat password"
            >

            <select name="type" class="form-control">
                <option value="user">User</option>
                <option value="editor">Editor</option>
                <option value="admin">Admin</option>
            </select>
            @error('type')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror

            <button class="mt-3" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection