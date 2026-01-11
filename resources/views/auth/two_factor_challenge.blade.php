@extends('layouts.app')

@section('title', 'Authentification à deux facteurs')

@section('content')
    <div class="auth-container">
        <h1>Authentification à deux facteurs</h1>

        <p>Confirmez l'accès à votre compte en entrant le code d'authentification fourni par votre application d'authentification.</p>

        @if ($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('two-factor.login') }}">
            @csrf

            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" id="code" name="code" autofocus autocomplete="one-time-code">
            </div>

            <div class="form-actions">
                <button type="submit">Confirmer</button>
            </div>
        </form>

        <p>Ou utilisez un code de récupération</p>

        <form method="POST" action="{{ route('two-factor.login') }}">
            @csrf

            <div class="form-group">
                <label for="recovery_code">Code de récupération</label>
                <input type="text" id="recovery_code" name="recovery_code" autocomplete="one-time-code">
            </div>

            <div class="form-actions">
                <button type="submit">Utiliser le code de récupération</button>
            </div>
        </form>
    </div>
@endsection
