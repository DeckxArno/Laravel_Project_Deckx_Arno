@include('layouts.header')

@yield('content')

@include('layouts.footer')














<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jeugdbeweging Platform')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <header class="shadow-lg bg-limedark text-white p-3 ">
        
        <a href="{{ url('/home') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 mr-2">
        </a>

        <nav>
            <ul class="flex justify-evenly w-full">
                <li>
                    <a href="{{ url('/home') }}" class="flex justify-evenly w-full">Activiteiten</a>
                </li>
                <li>
                    <a href="{{ url('/profile') }}" class="hover:underline">Profiel</a>
                </li>
            </ul>
        </nav>
    </header>


    <main class="container my-4">
        @yield('content')
    </main>


    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Jeugdbeweging Platform. Alle rechten voorbehouden.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
