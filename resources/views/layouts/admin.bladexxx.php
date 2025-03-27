<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Doador de Sangue</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #800;
            padding-top: 20px;
            width: 220px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
            font-size: 16px;
        }
        .sidebar a:hover {
            background-color: #444;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
            width: calc(100% - 220px);
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Perfil</a>
        <a href="#">Médicos</a>
        <a href="#">Triagens</a>
        <a href="#">Agendados</a>
        <a href="#">Equipe</a>
        <a href="#">Relatórios</a>
        <a href="#">Estoque</a>
        <a href="#">Configurações</a>
        <a href="#">Sair</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1 class="h2">@yield('title')</h1>
        <div class="content-body">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
