@section('page_title')
    Miro Miro
@endsection

@extends('layouts.default')

@section('content')

    <div class="hero-wrap">
        <!-- Wave déco (haut) -->
        <img src="{{ asset('images/wave_top.svg') }}" alt="" class="wave" />

        <!-- Hero section -->
        <section class="hero ">
            <div class="img-wrap">
                <img src="{{ asset('images/img_groupe1.png') }}" alt="Groupe portant des lunettes" />
                <div class="hero-content">
                    <h1>MIRO MIRO propose un large choix de lunettes photochromiques, du design à la vente, incluant des modèles
                        personnalisés</h1>
                    <a href="#" class="btn-primary">EXPLORER</a>
                </div>
            </div>
        </section>
        

        <!-- Wave déco (bas) -->
        <img src="{{ asset('images/wave_bottom.svg') }}" alt="" class="wave" />
    </div>

    <!-- Produits tendances -->
    <section class="section" id="trending">
        <h2 class="section-title">Nos produits tendances</h2>
        <div class="product-list">
            <!-- Product 1 -->
            <article class="product-card">
                <img src="{{ asset('images/img_produit1.png') }}" alt="Lunettes Lorem" />
                <div class="product-info">
                    <h3>Lorem</h3>
                    <span>10€</span>
                </div>
                <div class="product-cta">
                    <a href="#" class="btn-secondary">Voir</a>
                </div>
            </article>
            <!-- Duplicate product cards as needed -->
            <article class="product-card">
                <img src="{{ asset('images/img_produit1.png') }}" alt="Lunettes Lorem" />
                <div class="product-info">
                    <h3>Lorem</h3>
                    <span>10€</span>
                </div>
                <div class="product-cta">
                    <a href="#" class="btn-secondary">Voir</a>
                </div>
            </article>
            <article class="product-card">
                <img src="{{ asset('images/img_produit1.png') }}" alt="Lunettes Lorem" />
                <div class="product-info">
                    <h3>Lorem</h3>
                    <span>10€</span>
                </div>
                <div class="product-cta">
                    <a href="#" class="btn-secondary">Voir</a>
                </div>
            </article>
            <article class="product-card">
                <img src="{{ asset('images/img_produit1.png') }}" alt="Lunettes Lorem" />
                <div class="product-info">
                    <h3>Lorem</h3>
                    <span>10€</span>
                </div>
                <div class="product-cta">
                    <a href="#" class="btn-secondary">Voir</a>
                </div>
            </article>
            <article class="product-card">
                <img src="{{ asset('images/img_produit1.png') }}" alt="Lunettes Lorem" />
                <div class="product-info">
                    <h3>Lorem</h3>
                    <span>10€</span>
                </div>
                <div class="product-cta">
                    <a href="#" class="btn-secondary">Voir</a>
                </div>
            </article>
        </div>
    </section>

    <div class="custom-wrap">
        <!-- Wave déco (haut) -->
        <img src="{{ asset('images/wave_top.svg') }}" alt="" class="wave" />

        <!-- CTA Personnaliser -->
        <section class="cta-custom">
            <p>Vous souhaitez personnaliser vos lunettes ? Vous pouvez le faire en ligne avec notre sélecteur en
                sélectionnant parmi différentes formes, couleurs et styles.</p>
            <a href="#" class="btn-light">JE VEUX</a>
        </section>

        <!-- Wave déco (bas) -->
        <img src="{{ asset('images/wave_bottom.svg') }}" alt="" class="wave" />
    </div>

    <!-- Services -->
    <section class="services" id="services">
        <div class="service">
            <img src="{{ asset('images/logo_item1.png') }}" />
            <h4>Verres adaptatifs intelligents</h4>
            <p>Nos verres photochromiques s’adaptent instantanément à la lumière ambiante pour offrir un confort optimal
                – que vous soyez à vélo, en ville ou à la plage.</p>
            <a href="#" class="btn-secondary" style="align-self:center;">Explorer</a>
        </div>
        <div class="service">
            <img src="{{ asset('images/logo_item2.png') }}" />
            <h4>Lunettes 100% personnalisables</h4>
            <p>Montures sport, urbaines ou décontractées, à vous de créer la paire qui vous ressemble. Couleur, forme,
                verres, tout est personnalisable.</p>
            <a href="#" class="btn-secondary" style="align-self:center;">En savoir plus</a>

        </div>
        <div class="service">
            <img src="{{ asset('images/logo_item3.png') }}" />
            <h4>Suivi facile & livraison rapide</h4>
            <p>Suivi de commande instantané depuis votre espace client. Expédition rapide dans toute la France.</p>
            <a href="#" class="btn-secondary" style="align-self:center;">Suivre ma commande</a>
        </div>
    </section>

@endsection