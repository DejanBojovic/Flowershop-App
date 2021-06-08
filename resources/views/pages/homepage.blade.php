@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content')

<div class="cover">
    <div class="inner">
        <h1 class="cover-heading">Prelepo cvece za prelep dom</h1>
        <a href="{{ route('store') }}" class="btn btn-lg btn-secondary" style="background-color:#FF5145; border: none; padding: 12px 20px;">Kupi odmah</a>
    </div>
</div>

<div class="row section-1" style="width: 100%">
    <div class="row-inner col-lg-4">
        <i class="fas fa-spa"></i>
        <h3>Kolekcija cveća</h3>
        <p>Veliki izbor saksijskog i rezanog cveća</p>
    </div>
    <div class="row-inner col-lg-4">
        <i class="fas fa-gift"></i>
        <h3>Dostava na adresu</h3>
        <p>Povoljna dostava za sve delove Srbije</p>
    </div>
    <div class="row-inner col-lg-4">
        <i class="fas fa-sync"></i>
        <h3>Povraćaj novca</h3>
        <p>Svakoj nezadovoljnoj mušteriji izlazimo u susret</p>
    </div>
</div>

<!-- Gallery -->
<div class="row gallery">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="images/homepage/gallery/treca.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
  
      <img
        src="images/homepage/gallery/prva.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="images/homepage/gallery/cetvrta.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
  
      <img
        src="images/homepage/gallery/peta.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="images/homepage/gallery/druga.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
  
      <img
        src="images/homepage/gallery/sesta.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>
</div>
<!-- Gallery -->

<div class="row section-2" style="width: 100%">
    <div class="row-inner-2 col-lg-6 col-sm-12">
        <h4>Zašto baš mi?
        </h4>
        <p style="padding: 0 40px">Cvećara Verbena posluje preko 10 godina, i to veliko iskustvo koje poseduje stavlja u službu svih onih koji vole cveće i uživaju u svemu što ono sa sobom nosi. Svojom profesionalnim odnosom prema kupcima je od svog imena napravila brend koji je prepoznatljiv u celom Beogradu, a i šire.</p>
    </div>
    <div class="row-inner-2 col-lg-6 col-sm-12">
        <h4>Cvećara</h4>
        <ul>
            <li>
                <a href="{{ route('about') }}">
                    <i class="fas fa-spa"></i>
                    O nama
                </a>
            </li>
            <li>
                <a href="{{ route('store') }}">
                    <i class="fas fa-spa"></i>
                    Prodavnica
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}">
                    <i class="fas fa-spa"></i>
                    Kontakt
                </a>
            </li>
        </ul>
    </div>
</div>


@endsection