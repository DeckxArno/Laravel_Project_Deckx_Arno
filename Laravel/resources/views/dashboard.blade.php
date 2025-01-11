@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="home-page">
    <h1>Welkom bij het Jeugdbewegingen Spelletjesportaal!</h1>
    <p>Vind en deel spelletjes voor jouw vergaderingen.</p>
    <a href="{{ route('games.index') }}" class="btn btn-primary">Bekijk spelletjes</a>
</div>
@endsection