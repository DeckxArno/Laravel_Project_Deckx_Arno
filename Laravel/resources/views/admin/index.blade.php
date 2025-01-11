@extends('layouts.login')

@section('content')
<div class="container">
    <h1>Beheer gebruikers</h1>
    @foreach($users as $user)
        <div>
            <p>{{ $user->name }} ({{ $user->email }})</p>
            <form action="{{ $user->isAdmin() ? route('admin.removeAdmin', $user->id) : route('admin.makeAdmin', $user->id) }}" method="POST">
                @csrf
                <button type="submit">
                    {{ $user->isAdmin() ? 'Revoke Admin Rights' : 'Make Admin' }}
                </button>
            </form>
        </div>
    @endforeach
</div>
@endsection
