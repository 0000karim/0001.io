<!-- resources/views/layouts/admin_layout.blade.php -->

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <!-- Incluindo o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="d-flex" id="wrapper">
        <!-- Menu Lateral -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Painel Administrativo </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('perfil') }}" class="list-group-item list-group-item-action bg-light">Perfil</a>
                <a href="{{ route('medicos') }}" class="list-group-item list-group-item-action bg-light">Médicos</a>
                <a href="{{ route('triagens') }}" class="list-group-item list-group-item-action bg-light">Triagens</a>
                <a href="{{ route('agendados') }}" class="list-group-item list-group-item-action bg-light">Agendados</a>
                <a href="{{ route('equipe') }}" class="list-group-item list-group-item-action bg-light">Equipe</a>
                <a href="{{ route('relatorios') }}" class="list-group-item list-group-item-action bg-light">Relatórios</a>
                <a href="{{ route('estoque') }}" class="list-group-item list-group-item-action bg-light">Estoque</a>
                <a href="{{ route('configuracoes') }}" class="list-group-item list-group-item-action bg-light">Configurações</a>
                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-light">Sair</a>
            </div>
        </div>

        <!-- Página de Conteúdo -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
