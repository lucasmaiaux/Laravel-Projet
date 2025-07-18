<div class="container-fluid px-3">
    <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('images/logonoir1.png') }}" alt="Miro-Miro" class="logo" />
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-nav"
        aria-controls="primary-nav" aria-expanded="false" aria-label="Basculer la navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

<nav class="collapse navbar-collapse" id="primary-nav" aria-label="Navigation principale">
    <div class="d-flex justify-content-between align-items-center w-100">

        <!-- Groupe de gauche : navigation principale -->
        <ul class="navbar-nav d-flex flex-row gap-2">
            <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="/index">Explorer</a></li>
            <li class="nav-item"><a class="nav-link" href="/customize">Personnaliser</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
        </ul>

        <!-- Groupe du milieu : user auth -->
        <ul class="navbar-nav d-flex flex-row gap-2 align-items-center">
            @guest
                <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            @endguest

            @auth
                <li class="nav-item text-nowrap">
                    <span class="nav-link">Bienvenue {{ Auth::user()->name }}</span>
                </li>
                <li class="nav-item"><a class="nav-link" href="/backoffice/index">BackOffice</a></li>
                <li class="nav-item"><a class="nav-link" href="/profile">Compte</a></li>
                <li class="nav-item">
                    <form action="/logout" method="POST" class="m-0">
                        @csrf
                        <button class="btn btn-link nav-link p-0">Logout</button>
                    </form>
                </li>
            @endauth
        </ul>

        <!-- Groupe de droite : panier -->
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item">
                <a class="nav-link" href="/cart">
                    Panier
                    <img src="{{ asset('images/shopping-cart.svg') }}" alt="shopping-cart" class="ms-1" />
                </a>
            </li>
        </ul>

    </div>
</nav>


</div>