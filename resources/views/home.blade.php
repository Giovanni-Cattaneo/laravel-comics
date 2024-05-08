@extends('layout.app')

@section('main-content')
    <div class="position-relative pb-5">
        <div class="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
        </div>

        <div class="current">
            <h2 class="p-1 py-0">CURRENT SERIES</h2>
        </div>

        <div class="container mt-5">
            <div class="row">
                @foreach ($products as $index => $product)
                    <div class="col-2 g-4">
                        <div class="card">
                            <a href="{{ route('single', ['id' => $index]) }}"><img class="card-img-top"
                                    src="{{ $product['thumb'] }}" alt="Title" /></a>
                        </div>
                        <h5 class="text-center">{{ $product['title'] }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
