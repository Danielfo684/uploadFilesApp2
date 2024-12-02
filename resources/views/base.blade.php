<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplicación de Subir Archivos')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1>Upload Files App</h1>
            <nav>
                <a href="{{ route('subir.create') }}" class="subir"><button>Upload your File Here</button></a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
