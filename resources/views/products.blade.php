@extends('layouts.app')


@section('content')
<div class="col container">
    <div class="row justify-content-center d-flex gap-5">
            @foreach ($products as $product)
            <div class="my_card" style="width: 18rem;">
                <img src="{{ Vite::asset("resources/img/". $product["frontImage"])}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="brand">{{ $product["brand"] }}</h5>
                    <h3 class="card-title">{{ $product["name"] }}</h3>
                    <p class="card-text">{{ $product["price"] }}</p>
                </div>
            </div>
            {{-- <div class="card-body">
                <h4>{{ $product["name"] }}</h4>
            </div> --}}
        @endforeach
        </div>
        </div>
@endsection