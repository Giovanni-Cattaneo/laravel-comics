@extends('layout.app')

@section('main-content')
    <h1 class="text-center">{{ $product['title'] }}</h1>
    <div class="container single d-flex gap-5">
        <img class="single-comics" src="{{ $product['thumb'] }}" alt="">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $product['series'] }}</h4>
                <p class="card-text">{{ $product['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
