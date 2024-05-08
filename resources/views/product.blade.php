@extends('layout.app')

@section('main-content')
    <h1 class="text-center py-3">{{ $product['title'] }}</h1>
    <div class="container single d-flex gap-5 align-items-start py-5">
        <img class="single-comics" src="{{ $product['thumb'] }}" alt="">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $product['series'] }}</h4>
                <p class="card-text">{{ $product['description'] }}</p>
            </div>
            <div class="card-detail d-flex gap-4 justify-content-between px-3 py-2 border-top">
                <span>
                    <p><strong>Prezzo:</strong> {{ $product['price'] }}</p>
                </span>
                <span>
                    <p><strong>Data di rilascio:</strong> {{ $product['sale_date'] }}</p>
                </span>
                <span>
                    <p><strong>Categoria:</strong> {{ $product['type'] }}</p>
                </span>
            </div>
        </div>
    </div>
@endsection
