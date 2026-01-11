@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
    <div class="auth-container">
        <h1>Connexion</h1>

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

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember">
                    Se souvenir de moi
                </label>
            </div>

            <div class="form-actions">
                <button type="submit">Se connecter</button>
            </div>

            <div class="form-links">
                <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                <a href="{{ route('register') }}">Créer un compte</a>
            </div>
        </form>
    </div>
@endsection
