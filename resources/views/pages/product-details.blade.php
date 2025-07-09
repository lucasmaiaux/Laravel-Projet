@section('page_title')
    Miro Miro - Produit
@endsection

@extends('layouts.default')

@section('content')
    <section class="product-section">
        <img src="{{ $product[0]->img_url }}" alt="img_lunettes" class="product-img"/>
        <h1>{{ $product[0]->name }}</h1>
        <div class="product-id"><strong>ID</strong> : {{ $product[0]->id }}</div>
        <div class="product-description"><strong>Description</strong> : {{ $product[0]->description }}</div>
        <div class="product-price"><strong>Prix</strong> : {{ $product[0]->price }}€</div>
    </section>
@endsection