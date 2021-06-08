@extends('layouts.layout')
<link rel="stylesheet" href="{{ asset('css/store.css') }}">

@section('content')

<div class="header-store">
    <h1 class="text-center">Store Products</h1>
</div>

<div class="container">
    <div class="row row-store">
        @foreach ($products as $p)
            <div class="card col-lg-4 col-md-6 text-center" style="width: 18rem;">
                <img class="card-img-top" src="{{ $p->img }}" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">{{ $p->naziv }}</h4>
                  <p class="card-text">Dimenzije: {{ $p->dimenzije }}</p>
                  <a href="{{ route('product', ['id' => $p->productID]) }}" 
                  class="s-product-btn btn btn-primary">Learn More</a>
                </div>
            </div>
        @endforeach
    </div>  
</div>

@endsection