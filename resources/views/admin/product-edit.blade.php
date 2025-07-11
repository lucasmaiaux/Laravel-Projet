@section('page_title')
    Miro Miro - Produit
@endsection

@extends('layouts.default')

@section('content')
    <section class="product-section">
        <img src="{{ $product->img_url }}" alt="img_lunettes" class="product-img" />

        <form method="POST" action="/backoffice/{{ $product->id }}/save">
            @csrf
            <div class="form-group">
                <label for="url">URL Image</label>
                <input type="text" class="form-control" name="img_url" id="img_url" value="{{ $product->img_url }}">
            </div>
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
            </div>
            <div class="product-id"><strong>ID</strong> : {{ $product->id }}</div>

            <div class="form-group product-description">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ $product->description }}">
            </div>
            <div class="form-group product-price">
                <label for="price">Prix</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>


    </section>
@endsection