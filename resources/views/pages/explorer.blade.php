@section('page_title')
    Miro Miro - Explorer
@endsection

@extends('layouts.default')

@section('content')
    <h1 style="text-align:center">Notre selection</h1>

    @foreach ($products as $product)
    <section class="product-section">
        <a href="/explorer/{{ $product->id }}">
            <img src="{{ $product->img_url }}" alt="img_lunettes" class="product-img"/>
        </a>
        <h3>{{ $product->name }}</h1>
        <div class="product-id"><strong>ID</strong> : {{ $product->id }}</div>
        <div class="product-description"><strong>Description</strong> : {{ $product->description }}</div>
        <div class="product-price"><strong>Prix</strong> : {{ $product->price }}€</div>
    </section>
    @endforeach 

@endsection