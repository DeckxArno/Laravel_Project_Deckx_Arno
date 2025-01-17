@extends('layouts.app')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <style>
        /* Kleuren en variabelen */
        :root {
            --primary-color: #4A90E2;
            --secondary-color: #F5F5F5;
            --text-color: #333;
            --border-radius: 8px;
        }

        /* Algemene stijlen */
        body {
            font-family: Arial, sans-serif;
        }

        .banner {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('Scouts.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 250px;
            font-size: 3em;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-weight: bold;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .moto {
            margin: 1em auto;
            font-size: 1.25em;
            text-align: center;
            max-width: 80%;
            color: var(--text-color);
        }

        .onderste {
            background-color: var(--secondary-color);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 1em auto;
            padding: 1em;
            border-radius: var(--border-radius);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
        }

        .links, .midden, .rechts {
            border: 1px solid #ccc;
            padding: 1em;
            margin: 0.5em;
            text-align: center;
            font-size: 1.2em;
            border-radius: var(--border-radius);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .links:hover, .midden:hover, .rechts:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .links a, .midden a, .rechts a {
            text-decoration: none;
            color: var(--primary-color);
            font-weight: bold;
        }

        .login, .register {
            margin: 0.5em 0;
            border: 1px solid var(--primary-color);
            border-radius: var(--border-radius);
            padding: 0.5em;
            transition: background-color 0.3s;
        }

        .login:hover, .register:hover {
            background-color: var(--primary-color);
            color: white;
        }

        @media (max-width: 768px) {
            .onderste {
                flex-direction: column;
            }

            .banner {
                font-size: 2em;
                height: 200px;
            }
        }
    </style>

    <h1 class="banner">Activiteiten Net</h1>
    <p class="moto">Geen inspiratie voor je vergadering? Bekijk zeker ons aanbod van spellen/activiteiten!</p>

    
</div>
@endsection
