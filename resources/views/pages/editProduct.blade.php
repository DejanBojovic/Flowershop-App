@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/product-edit.css') }}">

@section('content')

<div class="product-edit-header">
    <h1>
        Editing product: 
        {{ $product->naziv }}
    </h1>
</div>

<div class="container">
    <div class="row">
        <form class="m-5 form" action="" method="POST">
            @csrf
            <div class="mb-3">
                <i class="fas fa-spa" style="color: #FF5145; font-size: 22px;"></i>
            </div>

            <input name="id" type="hidden" value="{{ $product->productID }}">

            <label>
                <p style="margin: 0 !important">Naziv:</p>
                
                <input name="naziv" type="text" value="{{ $product->naziv }}">
            </label>

            <label>
                <p style="margin: 0 !important">Cena:</p>
                
                <input name="cena" type="number" value="{{ $product->cena }}">
            </label>

            <label>
                <p style="margin: 0 !important">Dimenzije:</p>
                
                <input name="dimenzije" type="text" value="{{ $product->dimenzije }}">
            </label>

            <label>
                <p style="margin: 0 !important">Na stanju:</p>
                
                <input name="naStanju" type="number" value="{{ $product->naStanju }}">
            </label>

            <label>
                <p style="margin: 0 !important">Slika proizvoda:</p>
                
                <input name="img" type="text" value="{{ $product->img }}">
            </label>

                
            <textarea name="opis" rows="10" class="p-3">{{ $product->opis }}</textarea>

            <button class="mt-3" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection