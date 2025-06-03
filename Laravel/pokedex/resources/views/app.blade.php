<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokedex</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-3">
        <a href="/" class="navbar-brand">Pokédex</a>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
