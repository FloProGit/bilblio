@extends('layouts.app')

@section('title', 'Confirmer le mot de passe')

@section('content')
    <div class="auth-container">
        <h1>Confirmer le mot de passe</h1>

        <p>Pour des raisons de sécurité, veuillez confirmer votre mot de passe pour continuer.</p>

        @if ($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required autofocus>
            </div>

            <div class="form-actions">
                <button type="submit">Confirmer</button>
            </div>
        </form>
    </div>
@endsection
