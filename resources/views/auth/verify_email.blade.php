@extends('layouts.app')

@section('title', 'Vérification email')

@section('content')
    <div class="auth-container">
        <h1>Vérifiez votre adresse email</h1>

        <p>Un lien de vérification a été envoyé à votre adresse email. Veuillez vérifier votre boîte de réception.</p>

        @if (session('status') == 'verification-link-sent')
            <div class="alert-success">
                Un nouveau lien de vérification a été envoyé.
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="form-actions">
                <button type="submit">Renvoyer l'email de vérification</button>
            </div>
        </form>

        <div class="form-links">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Se déconnecter</button>
            </form>
        </div>
    </div>
@endsection
