@section('page_title')
    Miro Miro - Produit
@endsection

@extends('layouts.default')

@section('content')
    <section class="product-section">
        <img src="{{ $product->img_url }}" alt="img_lunettes" class="product-img"/>
        <h1>{{ $product->name }}</h1>
        <div class="product-id"><strong>ID</strong> : {{ $product->id }}</div>
        <div class="product-description"><strong>Description</strong> : {{ $product->description }}</div>
        <div class="product-price"><strong>Prix</strong> : {{ $product->price }}€</div>
    </section>
@endsection