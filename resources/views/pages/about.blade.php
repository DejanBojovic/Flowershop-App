@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@section('content')

<!-- Header -->
<header class="header-about text-center py-5 mb-4">
    <div class="container">
      <h1 class="font-weight-light text-white">Upoznajte nas tim</h1>
    </div>
</header>

<div class="row opis">
    <div class="col-xl-6 col-md-6 mb-4 prvi">
        Trudimo se da obezbedimo najbolje za svoje mušterije
    </div>
    <div class="col-lg-6">
        Cvećara “Verbena” je jedna od vodećih cvećara u Srbiji. Pažljivo biramo svaki cvet direktno kupljen na međunarodnoj berzi cveća u Holandiji od najpoznatijih proizvođača. Ispred svega na prvom mestu nam je kvalitet.
        <br><br>
        Imamo široku ponudu najekskluzivnijeg uvoznog, rezanog i saksijskog cveća. Cveće je izraz ljubavi, pažnje, gest dobrih i iskrenih namera, lepih želja, a ponekad i traženje oproštaja. Svojim iskustvom i ljubaznošću, osoblje cvećare Kazablanka će Vam pomoći da obradujete svoje najmilije, ulepšate svakodnevni životni i radni prostor. Ako neka prilika i nije toliko posebna, uz naše aranžmane će postati.
    </div>
</div>

<hr class="hr-about">
  
<div class="container">
    <div class="row">
      <!-- Team Member 1 -->
      <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="images/about/cvecar-1.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Julija Dobrosavljevic</h5>
            <div class="card-text text-black-50">Cvecar</div>
          </div>
        </div>
      </div>
      <!-- Team Member 2 -->
      <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="images/about/cvecar-2.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Jelena Rokic</h5>
            <div class="card-text text-black-50">Cvecar</div>
          </div>
        </div>
      </div>
      <!-- Team Member 3 -->
      <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="images/about/pr.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Marija Mikic</h5>
            <div class="card-text text-black-50">PR & Marketing</div>
          </div>
        </div>
      </div>
      <!-- Team Member 4 -->
      <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="images/about/menadzer.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Sofija Lokvic</h5>
            <div class="card-text text-black-50">Menadzer</div>
          </div>
        </div>
      </div>
    </div>
  
</div>


@endsection