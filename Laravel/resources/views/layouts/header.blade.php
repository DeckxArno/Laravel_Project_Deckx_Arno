<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jeugdbeweging Platform')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<header style="display: flex; justify-content: center; align-items: center; padding: 10px 20px; background-color: #f4f4f4; border-bottom: 2px solid #ccc;">
    <!-- Linkerkant navigatie -->
    <nav style="margin-right: 20px;">
        <ul style="display: flex; list-style: none; margin: 0; padding: 0;">
            <li style="margin-right: 20px;">
                <a href="{{ url('/about') }}" style="text-decoration: none; color: #333;">About</a>
            </li>
            <li style="margin-right: 20px;">
                <a href="{{ url('/home') }}" style="text-decoration: none; color: #333;">Home</a>
            </li>
        </ul>
    </nav>

    <!-- Logo in het midden -->
    <a href="{{ url('/home') }}" style="display: flex; align-items: center;">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 50px;">
    </a>

    <!-- Rechterkant navigatie -->
    <nav style="margin-left: 20px;">
        <ul style="display: flex; list-style: none; margin: 0; padding: 0;">
            <li style="margin-right: 20px;">
                <a href="{{ url('/profile') }}" style="text-decoration: none; color: #333;">Profiel</a>
            </li>
            <li>
                <a href="{{ url('/contact') }}" style="text-decoration: none; color: #333;">Contact</a>
            </li>
        </ul>
    </nav>
</header>


