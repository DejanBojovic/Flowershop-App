@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/user.css') }}">

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="user-icon col-lg-4 mb-4">
            <div class="user-icon-inner">
                <i class="far fa-user"></i>
            </div>
        </div>

        <div class="user-info col-lg-8">
            @if ($user->type == 'admin')
                <h1>Admin: {{ $user->username }}</h1>
            @elseif ($user->type == 'editor')
                <h1>Editor: {{ $user->username }}</h1>
            @else
                <h1>Username: {{ $user->username }}</h1>
            @endif
            <p>Email: {{ $user->email }}</p>
            <p>Created at: {{ $user->created_at }}</p>

            <a class="edit-user-icon" href="{{ route('editUser', ['id' => $user->userID]) }}">
                <i class="fas fa-edit mb-4"></i>
            </a>
        </div>

    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 ac">
                <div class="ac-top users mb-3">
                    <div class="heading">
                        <div>
                            <i class="fas fa-spa"></i>
                            Porudzbine
                        </div>
                    </div>
                </div>

                <div class="ac-bottom">
                    @foreach ($orders as $o)
                        <div class="order">
                            <div class="order-top">
                                <h4 class="order-username">Username: {{ $o->username }}</h4>
                                <div class="d-flex">
                                    <a href="{{ route('deleteOrder', ['id' => $o->orderID]) }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <p class="order-name-user">Proizvod: {{ $o->naziv }}</p>
                                <p>Kolicina: {{ $o->amount }}</p>
                                <p>Cena: {{ $o->amount * $o->cena }}</p>
                                <p>Datum: {{ $o->created_at }}</p>
                                <p>Status: {{ $o->status }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 ac">
                <div class="ac-top comments mb-3">
                    <div class="heading">
                        <div>
                            <i class="far fa-comment-alt"></i>
                            Komentari
                        </div>
                    </div>

                </div>

                <div class="ac-bottom">
                    @foreach ($comments as $c)
                        <div class="p p-4 mb-2">
                            <div class="p-info">
                                <h5>Korisnik: {{ $c->username }}</h5>
                                <p class="comment-name">Proizvod: {{ $c->naziv }}</p>
                                <p class="comment-name-user">Tekst: {{ $c->tekst }}</p>
                                <p>Kreirano: {{ $c->created_at }}</p>
                            </div>

                            <div class="d-flex flex-column">
                                <a class="edit-user" href="{{ route('editComment', ['id' => $c->commentID]) }}">
                                    <i class="fas fa-edit mb-4"></i>
                                </a>
                                <a href="{{ route('deleteComment', ['id' => $c->commentID]) }}">
                                    <i style="font-size: 22px;" class="fas fa-trash-alt"></i>
                                </a>
                            </div> 
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 ac likes mb-3">
                <div class="ac-top orders">
                    <div class="heading">
                        <div>
                            <i class="fas fa-heart"></i>
                            Svidjanja
                        </div>
                    </div>

                </div>

                <div class="ac-bottom">
                    @foreach ($likes as $l)
                        <div class="p p-4 mb-2">
                            <div class="p-info">
                                <h5 class="like-name-user">Proizvod: {{ $l->naziv }}</h5>
                                <p>Kreirano: {{ $l->created_at }}</p>
                            </div>

                            <div class="d-flex">
                                <a href="{{ route('deleteLike', ['id' => $l->likeID]) }}">
                                    <i style="font-size: 22px;" class="fas fa-trash-alt"></i>
                                </a>
                            </div> 
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
</div>

<script src="js/adminSearch.js"></script>

@endsection