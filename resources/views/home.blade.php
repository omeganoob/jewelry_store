@extends('layouts.master',[
    'items'=> $items,
    'total' => $total
])

@section('nav')
    <ul class="nav bav-bar">
        <li class="nav-item">
            <a href="nav-link">dasdsa</a>
        </li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="last-products">
        <h2>Last added products</h2>
        <section class="products">
            @foreach ($products as $prod)
                <article>
                    <img src="storage//{{ $prod->image }}" alt="image" style="width: 194px; height: 210px">
                    <h3>{{ $prod->name }}</h3>
                    <h4>{{ $prod->price }}</h4>
                    <a href="/cart/{{ $prod->id }}" class="btn-add">Add to cart</a>
                </article>
            @endforeach
        </section>
    </div>
    <section class="quick-links">
        <article style="background-image: url({{ URL::asset('storage/images/2.jpg') }})">
            <a href="#" class="table">
                <div class="cell">
                    <div class="text">
                        <h4>Lorem ipsum</h4>
                        <hr>
                        <h3>Dolor sit amet</h3>
                    </div>
                </div>
            </a>
        </article>
        <article class="red" style="background-image: url({{ URL::asset('storage/images/3.jpg') }})">
            <a href="#" class="table">
                <div class="cell">
                    <div class="text">
                        <h4>consequatur</h4>
                        <hr>
                        <h3>voluptatem</h3>
                        <hr>
                        <p>Accusantium</p>
                    </div>
                </div>
            </a>
        </article>
        <article style="background-image: url({{ URL::asset('storage/images/4.jpg') }})">
            <a href="#" class="table">
                <div class="cell">
                    <div class="text">
                        <h4>culpa qui officia</h4>
                        <hr>
                        <h3>magnam aliquam</h3>
                    </div>
                </div>
            </a>
        </article>
    </section>
</div>
@endsection
