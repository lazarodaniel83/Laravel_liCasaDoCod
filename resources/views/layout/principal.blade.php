<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <title>Controle de estoque</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/produtos">
                            Estoque Daniel_liCasaDoCod_Laravel
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/produtos">Listagem</a></li>
                        <li><a href="/produtos/novo">Novo</a></li>
                    </ul>
                </div>
            </nav>

            @yield('conteudo')
            <footer class="footer">
                <p align="center">&copy; Livro de Laravel da casa do Código | &copy; Daniel 2020</p>
               
            </footer>
        </div>
    </body>
</html>