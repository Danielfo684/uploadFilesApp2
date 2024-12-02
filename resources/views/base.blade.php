<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplicación de Subir Archivos')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <!-- Header de la página -->
    <header>
        <div class="container">
            <h1>Aplicación de Subida de Archivos</h1>
            <nav>
                <ul>
                <li><a href="{{ route('subir.create') }}" class="subir">Subir Archivo</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer de la página -->
    <footer>
        <div class="container">
            <p>&copy;Dani Laravel</p>
        </div>
    </footer>

</body>
</html>
