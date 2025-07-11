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
        <a href="/backoffice/{{ $product->id }}/edit">
            <button>Editer</button>
        </a>

        <form action="/backoffice/{{ $product->id }}/delete" method="POST">
            <input type="hidden" name="_method" value="DELETE" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Delete">
        </form>
    </section>
@endsection