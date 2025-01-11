@extends('layouts.login')

@section('title', 'Welkom')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="text-center p-5 rounded shadow bg-white">
        <h1 class="display-4 mb-4">Welkom op onze website!</h1>
        <p class="lead mb-4">Kies hieronder om in te loggen of een account aan te maken:</p>
        <div class="d-flex justify-content-center">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mx-2 px-4">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg mx-2 px-4">Registreren</a>
        </div>
    </div>
</div>
@endsection
