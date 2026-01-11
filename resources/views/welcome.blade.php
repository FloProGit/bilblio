@extends('layouts.app')

@section('title', 'Accueil - Biblio')

@section('content')
    <!-- Hero Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-primary">Bienvenue sur Biblio</h1>
                    <p class="lead text-muted">
                        Découvrez notre collection de livres et plongez dans un monde de lecture passionnant.
                    </p>
                    <div class="d-grid gap-2 d-md-flex">
                        <button class="btn btn-primary btn-lg px-4 me-md-2">
                            Découvrir
                        </button>
                        <button class="btn btn-outline-secondary btn-lg px-4">
                            En savoir plus
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" class="img-fluid rounded shadow" alt="Bibliothèque">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nos Services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-book-fill text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Large Collection</h5>
                            <p class="card-text">
                                Plus de 10 000 livres disponibles dans tous les genres.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-truck text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Livraison Rapide</h5>
                            <p class="card-text">
                                Recevez vos livres en 24-48h partout en France.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Recommandations</h5>
                            <p class="card-text">
                                Des suggestions personnalisées basées sur vos goûts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Books Section -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Livres Populaires</h2>
            <div class="row g-4">
                @for($i = 1; $i <= 3; $i++)
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <img src="https://via.placeholder.com/350x500" class="card-img-top" alt="Livre {{ $i }}">
                            <div class="card-body">
                                <h5 class="card-title">Titre du Livre {{ $i }}</h5>
                                <p class="card-text text-muted">Auteur {{ $i }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-primary fw-bold">19.99 €</span>
                                    <button class="btn btn-sm btn-outline-primary">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body text-center p-5">
                            <h3 class="mb-3">Inscrivez-vous à notre newsletter</h3>
                            <p class="text-muted mb-4">
                                Recevez nos dernières nouveautés et offres exclusives
                            </p>
                            <form>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Votre email">
                                    <button class="btn btn-primary" type="submit">
                                        S'inscrire
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold">10K+</h2>
                    <p class="lead">Livres</p>
                </div>
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold">5K+</h2>
                    <p class="lead">Clients</p>
                </div>
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold">50+</h2>
                    <p class="lead">Auteurs</p>
                </div>
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold">4.8★</h2>
                    <p class="lead">Note moyenne</p>
                </div>
            </div>
        </div>
    </section>
@endsection
