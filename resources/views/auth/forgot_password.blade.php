@extends('layouts.app')

@section('title', 'Mot de passe oublié')

@section('content')
    <div class="auth-container">
        <h1>Mot de passe oublié</h1>

        <p>Entrez votre adresse email pour recevoir un lien de réinitialisation.</p>

        @if (session('status'))
            <div class="alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-actions">
                <button type="submit">Envoyer le lien</button>
            </div>

            <div class="form-links">
                <a href="{{ route('login') }}">Retour à la connexion</a>
            </div>
        </form>
    </div>
@endsection
