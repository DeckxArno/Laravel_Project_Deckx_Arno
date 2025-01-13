@extends('layouts.profile_layout')

@section('title', 'Profiel van ' . ($user->username ?? $user->name))

@section('content')
<div class="card shadow mx-auto" style="max-width: 600px; border-radius: 10px;">
    <div class="card-body text-center">
        <!-- Profielfoto -->
        <img src="{{ asset('images/profiel.png') }}" 
             alt="Profielfoto" 
             class="rounded-circle mb-3"
             style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #ddd; background-color: gray">
        <!-- Gebruikersinformatie -->
        <h2>{{ $user->username ?? $user->name }}</h2>
        <p class="text-muted mb-2">Verjaardag: {{ $user->birthday ? $user->birthday->format('d-m-Y') : 'Niet opgegeven' }}</p>
        <p class="text-muted mb-4">E-mailadres: {{ $user->email }}</p>
        <!-- Over mij -->
        <h4>Over mij</h4>
        <p>{{ $user->about_me ?? 'Deze gebruiker heeft nog niets over zichzelf geschreven.' }}</p>
        <!-- Bewerken knop -->
        @auth
            @if (auth()->id() === $user->id)
                <a href="{{ route('profile.edit', $user) }}" class="btn btn-primary mt-3">Profiel bewerken</a>
                <!-- Logout Form -->
                <form method="POST" action="{{ route('logout') }}" class="mt-3">
                    @csrf
                    <button type="submit" class="btn btn-danger">Uitloggen</button>
                </form>
            @endif
        @endauth
    </div>
</div>
@endsection
