@extends('layout.app')

@section('main-content')

<div class="container">
    {{$product['title']}}
</div>
<img src="{{$product['thumb']}}" alt="">
@endsection