{{-- @extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Bem-vindo ao Painel de Controle')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Usuários Registrados</h5>
                    <p class="card-text">100</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Doações Recentes</h5>
                    <p class="card-text">50</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Eventos Próximos</h5>
                    <p class="card-text">3</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            background-color: rgb(111, 136, 0);
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
            background-color: #495057;
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
        <a href="{{ url('/admin/perfil') }}">Perfil</a>
        <a href="{{ url('/admin/medicos') }}">Médicos rrrr</a>
        <a href="{{ url('/admin/triagens') }}">Triagens</a>
        <a href="{{ url('/admin/agendados') }}">Agendados</a>
        <a href="{{ url('/admin/equipe') }}">Equipe</a>
        <a href="{{ url('/admin/relatorios') }}">Relatório</a>
        <a href="{{ url('/admin/estoque') }}">Estoque</a>
        <a href="{{ url('/admin/configuracoes') }}">Configurações</a>

        <!-- Logout -->
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
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
