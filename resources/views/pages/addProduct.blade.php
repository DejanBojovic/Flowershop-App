@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/product-edit.css') }}">

@section('content')

<div class="product-edit-header">
    <h1>
        Adding new product
    </h1>
</div>

<div class="container">
    <div class="row">
        <form class="m-5 form" action="" method="POST">
            @csrf
            <div class="mb-3">
                <i class="fas fa-spa" style="color: #FF5145; font-size: 22px;"></i>
            </div>

            <label>
                <p style="margin: 0 !important">Naziv:</p>
                
                <input name="naziv" type="text">
            </label>

            <label>
                <p style="margin: 0 !important">Cena:</p>
                
                <input name="cena" type="number">
            </label>

            <label>
                <p style="margin: 0 !important">Dimenzije:</p>
                
                <input name="dimenzije" type="text">
            </label>

            <label>
                <p style="margin: 0 !important">Na stanju:</p>
                
                <input name="naStanju" type="number">
            </label>

            <label>
                <p style="margin: 0 !important">Slika proizvoda:</p>
                
                <input name="img" type="text">
            </label>

            <label>
                <p style="margin: 0 !important" class="text-center">Opis:</p>
                <textarea name="opis" rows="10" class="p-3"></textarea>
            </label>

            <button class="mt-3" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection