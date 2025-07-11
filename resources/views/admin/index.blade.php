@section('page_title')
    Miro Miro - Explorer (Back office)
@endsection

@extends('layouts.default')

@section('content')
    <div class="indexContent">
        <h1 style="text-align:center">Notre selection</h1>

        <a href="/backoffice/create">
            <button class="btn btn-primary">Ajouter un produit</button>
        </a>


        @foreach ($products as $product)
            <section class="product-section">
                <a href="/backoffice/{{ $product->id }}">
                    <img src="{{ $product->img_url }}" alt="img_lunettes" class="product-img" />
                </a>
                <h3>{{ $product->name }}</h1>
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
        @endforeach
    </div>

@endsection