@section('page_title')
    Miro Miro - Produit
@endsection

@extends('layouts.default')

@section('content')
    <section class="product-section">
        <form method="POST" action="/backoffice/create">
            @csrf
            <div class="form-group">
                <label for="url">URL Image</label>
                <input type="text" class="form-control" name="img_url" id="img_url">
            </div>
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group product-description">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <div class="form-group product-price">
                <label for="price">Prix</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>


    </section>
@endsection