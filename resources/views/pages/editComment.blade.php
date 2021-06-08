@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/product-edit.css') }}">

@section('content')

<div class="product-edit-header">
    <h1>
        Editovanje komentara
    </h1>
</div>

<div class="container">
    <div class="row">
        <form class="m-5 form" action="" method="POST">
            @csrf
            <div class="mb-3">
                <i class="far fa-comment-alt" style="color: #FF5145; font-size: 22px;"></i>
            </div>

            <input type="hidden" name="commentID" value="{{ $comment->commentID }}">

            <label>
                <p style="margin: 0 !important" class="text-center">Komentar:</p>
                <textarea name="tekst" rows="10" class="p-3">{{ $comment->tekst }}</textarea>
            </label>

            <button class="mt-3" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection