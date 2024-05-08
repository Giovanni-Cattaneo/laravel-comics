@extends('layout.app')

@section('main-content')
    <div class="container single d-flex">
        <div>
            <h1>{{ $product['title'] }}</h1>

            <img class="single-comics" src="{{ $product['thumb'] }}" alt="">
        </div>

        <div class="card w-50 justify-self-center">
            <div class="card-body">
                <h4 class="card-title">{{ $product['series'] }}</h4>
                <p class="card-text">{{ $product['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
