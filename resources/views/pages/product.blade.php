@extends('layouts.layout')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">

@section('content')
<div class="header-product">
    <a href="{{ route('store') }}">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h1 class="text-center">{{ $p->naziv }}</h1>
</div>
<div class="container c-product">
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img style="border-radius: 15px; border: 1px solid #ddd;" class="card-img-top mb-5 mb-md-0" src="{{ asset($p->img) }}" alt="..." />
                </div>
                <div class="col-md-6">
                    <div class="fs-5 mb-5">
                        <p style="margin-bottom: 0;">Cena: {{ $p->cena }} din</p>
                        <p>Dimenzije: {{ $p->dimenzije }}</p>
                    </div>
                    <p class="lead">{{ $p->opis }}</p>
                    @if ($p->naStanju == 0)
                        <p class="lead">Nema na stanju</p>
                    @else
                        <p class="lead">Na stanju: {{ $p->naStanju }}</p>
                        <div class="d-flex align-items-center">
                            <form class="d-flex align-items-center" action="{{ route('addOrder') }}" method="POST">
                                @csrf
                                
                                <input name="amount" class="form-control text-center me-3" type="num" value="1" style="max-width: 3rem" />

                                <input type="hidden" name="userID" value="{{ auth()->user()->userID }}">

                                <input type="hidden" name="productID" value="{{ $p->productID }}">

                                <button type="submit" class="product-btn btn btn-outline-dark flex-shrink-0" type="button">
                                    Dodaj u korpu
                                </button>
                            </form>

                            <div class="ml-3" style="display: inline-block">
                                <form class="likes" action="{{ route('addLike') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="userID" value="{{ auth()->user()->userID }}">
                                    <input type="hidden" name="productID" value="{{ $p->productID }}">

                                    <button type="submit">
                                        <i style="color: #FF5145;" class="far fa-heart"></i>
                                    </button>
                                    
                                    <span>{{ count($likes) }}</span>
                                </form>
                                
                            </div>
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-12">
                <div class="d-flex flex-column comment-section">
                    <div class="bg-light pt-2 mb-4">
                        <form action="{{ route('addComment') }}" method="POST">
                            @csrf

                            <input type="hidden" name="productID" value="{{ $p->productID }}">

                            <input type="hidden" name="userID" value="{{ auth()->user()->userID }}">

                            <div class="d-flex flex-row align-items-start">
                                <textarea name="tekst" id="comment-body" class="form-control shadow-none textarea" placeholder="Write a comment.."></textarea>
                            </div>
                            <div class="mt-2 text-right">
                                <button class="submit-btn product-btn btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
                                <button class="cancel-button product-btn btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
                            </div>
                        </form>
                    </div>

                    <div class="comments-container">
                        @foreach ($comments as $c)
                            <div id="comment" class="bg-white p-4 mb-2" style="border: 1px solid #e2e2e2; border-radius: 10px;">
                                <div class="d-flex flex-row user-info">
                                    <i class="fas fa-user comment-icon"></i>
                                    <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{ $c->username }}</span><span class="date text-black-50">Kreirano: {{ $c->created_at }}</span></div>
                                </div>
                                <div class="mt-2">
                                    <p class="comment-text">{{ $c->tekst }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript">

    const productButton = document.querySelector('.product-btn')
    productButton.addEventListener('click', (e) => {
        if(!confirm('Potvrdi kupovinu!')) {
            e.preventDefault()
        }    
    })

</script>
<script src="{{ asset('js/product.js') }}"></script>

@endsection