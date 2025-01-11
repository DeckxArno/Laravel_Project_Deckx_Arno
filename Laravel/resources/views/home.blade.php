@extends('layouts.app')

@section('title', 'Home - Activiteitenpagina')

@section('header')
    
@endsection

@section('content')
    <div class="row">
        @if ($activities->isEmpty())
            <div class="col-12">
                <div class="alert alert-info" role="alert">
                    Er zijn nog geen activiteiten toegevoegd. <a href="#" class="alert-link">Voeg er een toe!</a>
                </div>
            </div>
        @else
            @foreach ($activities as $activity)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $activity->title }}</h5>
                            <p class="card-text">{{ Str::limit($activity->description, 150) }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            Toegevoegd op: {{ $activity->created_at->format('d-m-Y') }}
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
