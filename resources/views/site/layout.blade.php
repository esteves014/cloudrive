<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="shortcut icon" href="{{ asset('cloudrive.png') }}" type="image/x-icon">

    {{-- CSS --}}
    <link rel="stylesheet" href="css/style.css">

    {{-- Framework CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    {{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo/cloudrive.png') }}" alt="Logo Cloudrive"
                    id="img-logo"></a>
            <a class="btn btn-primary display-block display-md-none" href="usuario.login">Entrar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-md-auto ms-sm-auto">
                    <li class="nav-item">
                        <a class="nav-link text-black active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Sobre o Projeto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Contato</a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-primary display-md-block display-none" href="usuario.login">Entrar</a>

        </div>
    </nav>

    {{-- Conteúdo --}}
    @yield('conteudo')

    {{-- Framework JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
