<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('pestaña')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="header-vintage text-center py-5">
        <h1 class="display-4 fw-bold">Coffee N Tea</h1>
        <p class="lead slogan">"El sabor del tiempo en cada taza"</p>
    </header>
        <nav class="navbar navbar-expand-lg navbar-dark vintage-nav">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">Coffee N Tea</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/')}}">Presentación</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="presentacion" class="container my-5 p-4 vintage-box">
        @yield('titulo')
        @yield('contenido')
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
