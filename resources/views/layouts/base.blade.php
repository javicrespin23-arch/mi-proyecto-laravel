<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Mi Proyecto')</title>
    <!-- Un toque rápido de estilos sencillos con Simple.css -->
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
    <header>
        <nav>
            <a href="/">Inicio</a> | 
            <a href="/nosotros">Nosotros</a>
        </nav>
        <h1>@yield('encabezado', 'Bienvenido')</h1>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>© 2026 - Proyecto Creado en VS Code</p>
    </footer>
</body>
</html>