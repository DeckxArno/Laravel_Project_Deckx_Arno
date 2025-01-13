@extends('layouts.profile_layout')

@section('content')
<div class="container">
    <h1>Profiel bewerken</h1>

    <form action="{{ route('profile.update', $user) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Gebruikersnaam</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}">
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Verjaardag</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday', $user->birthday) }}">
        </div>
        <div class="mb-3">
            <label for="profile_photo" class="form-label">Profielfoto</label>
            <input type="file" class="form-control" id="profile_photo" name="profile_photo">
        </div>
        <div class="mb-3">
            <label for="about_me" class="form-label">Over mij</label>
            <textarea class="form-control" id="about_me" name="about_me" rows="4">{{ old('about_me', $user->about_me) }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Opslaan</button>
    </form>
</div>
@endsection
