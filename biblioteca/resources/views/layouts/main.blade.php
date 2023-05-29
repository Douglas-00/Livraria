<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Css Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Css Aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- Javascript -->
        <script src="/js/scripts.js"></script>
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                   <a href="/"class="navbar-brand">
                    <img src="/img/teste.png" alt="Teste">
                   </a>
                   <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/users" class="nav-link">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a href="/books" class="nav-link">Livros</a>
                        </li>
                         <li class="nav-item">
                            <a href="/users/create" class="nav-link">Criar Usuario</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="/books/create" class="nav-link">Criar Livro</a>
                        </li>
                   </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                 @yield('content')
                </div>
            </div>
        </main>

        <footer>
            <p>Biblioteca  2023</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
