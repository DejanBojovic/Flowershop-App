@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/user-edit.css') }}">

@section('content')

<div class="user-edit-header">
    <h1>
        Editing user: 
        {{ $user->username }}
    </h1>
</div>

<div class="container">
    <div class="row">
        <form class="m-5 form" action="" method="POST">
            @csrf
            <div class="mb-3">
                <i class="fas fa-user"></i>
            </div>

            <input name="id" type="hidden" value="{{ $user->userID }}">

            <label>
                <p style="margin: 0 !important">Password:</p>
                
                <input name="password" type="password" value="{{ $user->password }}">
            </label>
            @error('password')
                <p style="color: #FF5145">{{ $message }}</p>
            @enderror
            <label>
                <p style="margin: 0 !important">Confirm:</p>
                
                <input 
                type="password" name="password_confirmation" class="form-control" value="{{ $user->password }}">
            </label>

            @if (auth()->user()->type === 'admin')
                <select name="type" class="form-control">
                    @if ($user->type == 'user')
                        <option value="user">User</option>
                        <option value="editor">Editor</option>
                        <option value="admin">Admin</option>
                    @elseif ($user->type == 'editor')
                        <option value="editor">Editor</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    @else
                        <option value="admin">Admin</option>
                        <option value="editor">Editor</option>
                        <option value="user">User</option>
                    @endif
                </select>
            @endif

            <button class="mt-3" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection