@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')

<div class="header-dashboard">
    <h1>Dashboard</h1>
</div>

<div>
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-lg-4 col-md-6 ac">
                <div class="ac-top users">
                    <div class="heading">
                        <div>
                            <i class="fas fa-users"></i>
                            Korisnici
                        </div>

                        <div>
                            @if (auth()->user()->type === 'admin')
                                <a href="{{ route('newUser') }}">
                                    <i class="fas fa-plus"></i>
                                </a>
                            @endif
                        </div>
                    </div>

                    <input class="user-input" type="text" placeholder="Search..">
                </div>

                <div class="ac-bottom">
                    @foreach ($users as $u)
                        <div class="u p-4 mb-2">
                            <div class="u-info">
                                <h5 class="username">Username: {{ $u->username }}</h5>
                                <p>Email: {{ $u->email }}</p>
                                <p>Tip: {{ $u->type }}</p>
                                <p>Created at: {{ $u->created_at }}</p>
                                <p>Updated at: {{ $u->updated_at }}</p>
                            </div>

                            @if (auth()->user()->type === 'admin')
                                <div class="u-icons">
                                    <a href="{{ route('editUser', [
                                        'id' => $u->userID
                                    ]) }}">
                                        <i class="fas fa-edit mb-4"></i>
                                    </a>

                                    <a href="{{ route('deleteUser', [
                                        
                                        'id' => $u->userID
                                    ]) }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                            
                                </div>
                            @endif
                              
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ac">
                <div class="ac-top products">
                    <div class="heading">
                        <div>
                            <i class="fas fa-spa"></i>
                            Proizvodi
                        </div>

                        <div>
                            <a href="{{ route('newProduct') }}">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>

                    <input class="product-input" type="text" placeholder="Search..">
                </div>

                <div class="ac-bottom">
                    @foreach ($products as $p)
                        <div class="p p-4 mb-2">
                            <div class="p-info">
                                <h5 class="product-name">Naziv: {{ $p->naziv }}</h5>
                                <p>Cena: {{ $p->cena }}</p>
                                <p>Na stanju: {{ $p->naStanju }}</p>
                                <p>Dimenzije: {{ $p->dimenzije }}</p>
                                <p>Opis: {{ $p->opis }}</p>
                            </div>

                            <div class="p-icons">
                                <a href="{{ route('editProduct', [
                                    'id' => $p->productID
                                ]) }}">
                                    <i class="fas fa-edit mb-4"></i>
                                </a>
                                
                                @if (auth()->user()->type === 'admin')
                                    <a href="{{ route('deleteProduct', [
                                        'id' => $p->productID
                                    ]) }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                @endif
                                
                            </div>  
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ac orders">
                <div class="ac-top orders">
                    <div class="heading">
                        <div>
                            <i class="fas fa-gift"></i>
                            Porudzbine
                        </div>

                        @if (auth()->user()->type === 'admin')
                            <a href="{{ route('updateOrders') }}" class="mr-2">
                                <i style="font-size: 22px;" class="far fa-check-circle"></i>
                            </a>
                        @endif
                    </div>

                    <input class="order-input" type="text" placeholder="Search..">
                </div>

                <div class="ac-bottom">
                    @foreach ($orders as $o)
                        <div class="order">
                            <div class="order-top">
                                <h4 class="order-username">Username: {{ $o->username }}</h4>
                                <div class="d-flex">
                                    @if (auth()->user()->type === 'admin')
                                        <a href="{{ route('updateOrder', ['id' => $o->orderID ]) }}" class="mr-2">
                                            <i class="far fa-check-circle"></i>
                                        </a>
                                        <a href="{{ route('deleteOrder', ['id' => $o->orderID]) }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <p class="order-name">Proizvod: {{ $o->naziv }}</p>
                                <p>Kolicina: {{ $o->amount }}</p>
                                <p>Cena: {{ $o->amount * $o->cena }}</p>
                                <p>Datum: {{ $o->created_at }}</p>
                                <p>Status: {{ $o->status }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4 col-md-6 ac messages">
                <div class="ac-top orders">
                    <div class="heading">
                        <div>
                            <i class="far fa-envelope"></i>
                            Poruke
                        </div>
                        @if (auth()->user()->type === 'admin')
                            <a href="{{ route('updateMessages') }}" class="mr-2">
                                <i style="font-size: 22px;" class="far fa-check-circle"></i>
                            </a>
                        @endif
                    </div>

                    <input class="message-input" type="text" placeholder="Search..">
                </div>

                <div class="ac-bottom">
                    @foreach ($messages as $m)
                        <div class="p p-4 mb-2">
                            <div class="p-info">
                                <h5 class="message-name">Naslov: {{ $m->naslov }}</h5>
                                <p>Kreirano: {{ $m->created_at }}</p>
                                <p>Status: {{ $m->status }}</p>
                                <p>Ime: {{ $m->ime }}</p>
                                <p>Email: {{ $m->email }}</p>
                                <p>Tekst: {{ $m->tekst }}</p>
                            </div>

                            <div class="d-flex">
                                @if (auth()->user()->type === 'admin')
                                    <a href="{{ route('updateMessage', ['id' => $m->messageID]) }}" class="mr-2">
                                        <i style="font-size: 22px;" class="far fa-check-circle"></i>
                                    </a>
                                    <a href="{{ route('deleteMessage', ['id' => $m->messageID]) }}">
                                        <i style="font-size: 22px;" class="fas fa-trash-alt"></i>
                                    </a>
                                @endif
                            </div> 
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4 col-md-6 ac likes">
                <div class="ac-top orders">
                    <div class="heading">
                        <div>
                            <i class="fas fa-heart"></i>
                            Svidjanja
                        </div>
                    </div>

                    <input class="like-input" type="text" placeholder="Search..">
                </div>

                <div class="ac-bottom">
                    @foreach ($likes as $l)
                        <div class="p p-4 mb-2">
                            <div class="p-info">
                                <h5 class="like-name">Proizvod: {{ $l->naziv }}</h5>
                                <p>Korisnik: {{ $l->username }}</p>
                                <p>Kreirano: {{ $l->created_at }}</p>
                            </div>

                            <div class="d-flex">
                                @if (auth()->user()->type === 'admin')
                                    <a href="{{ route('deleteLike', ['id' => $l->likeID]) }}">
                                        <i style="font-size: 22px;" class="fas fa-trash-alt"></i>
                                    </a>
                                @endif
                            </div> 
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4 col-md-6 ac comments">
                <div class="ac-top orders">
                    <div class="heading">
                        <div>
                            <i class="far fa-comment-alt"></i>
                            Komentari
                        </div>
                    </div>

                    <input class="comment-input" type="text" placeholder="Search..">
                </div>

                <div class="ac-bottom">
                    @foreach ($comments as $c)
                        <div class="p p-4 mb-2">
                            <div class="p-info">
                                <h5>Korisnik: {{ $c->username }}</h5>
                                <p class="comment-name">Proizvod: {{ $c->naziv }}</p>
                                <p>Tekst: {{ $c->tekst }}</p>
                                <p>Kreirano: {{ $c->created_at }}</p>
                            </div>

                            <div class="d-flex">
                                @if (auth()->user()->type === 'admin')
                                    <a href="{{ route('deleteComment', ['id' => $c->commentID]) }}">
                                        <i style="font-size: 22px;" class="fas fa-trash-alt"></i>
                                    </a>
                                @endif
                            </div> 
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col" id="chart_div"></div>
        </div>
    </div>
</div>


<script src="js/adminSearch.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    const chartInfo = {!! json_encode($orders->toArray()) !!}

    const productsArr = []
    const newArr = []

    chartInfo.forEach(el => {
        productsArr.push([el.naziv, el.amount])
        newArr.push(el.naziv)
    })

    let s = new Set(newArr);
    let setValues = Array.from(s.values());

    const arr = []
    for(let i = 0; i < setValues.length; i++) {
        let num = 0

        for(let j = 0; j < productsArr.length; j++) {
            if(productsArr[j][0] === setValues[i]) {
                num += productsArr[j][1]
                
                productsArr.splice(j, 1)
            }
        }

        arr.push([setValues[i], num])
    }

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', '');
        data.addRows(arr);

        const height = data.getNumberOfRows() * 81 + 30;
        // Set chart options
        var options = {'title':'Sold Products',
                        'width': '100%',
                        'height': height};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

@endsection