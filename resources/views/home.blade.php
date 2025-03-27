@extends('layouts.home')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel Administrativo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Está logado!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}


    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            padding: 20px;
            flex: 1;
        }
        .dashboard-header {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .card-custom {
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
   

        <!-- Content -->
        <div class="content">
            <!-- Dashboard Header -->
            <div class="dashboard-header">
                {{-- <h3>Dashboard</h3> --}}
                <p>Resumo das informações do painel de administração.</p>
            </div>

            <!-- Cards -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card card-custom text-center">
                        <h5 class="card-title">Total de Doadores</h5>
                        <p class="card-text">120</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom text-center">
                        <h5 class="card-title">Triagens Pendentes</h5>
                        <p class="card-text">45</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom text-center">
                        <h5 class="card-title">Estoque de Sangue</h5>
                        <p class="card-text">500 Unidades</p>
                    </div>
                </div>
            </div>

            <!-- Gráfico -->
            <div class="card card-custom mb-4">
                <div class="card-body">
                    <h5 class="card-title">Gráfico de Doações</h5>
                    <canvas id="doacoesChart"></canvas>
                </div>
            </div>

            <!-- Tabela de Agendamentos -->
            <div class="card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Agendamentos Recentes</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome do Doador</th>
                                <th>Data</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>João Silva</td>
                                <td>10/10/2025</td>
                                <td>Pendente</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Maria Oliveira</td>
                                <td>12/10/2025</td>
                                <td>Confirmado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js (para o gráfico de doações) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Configuração do gráfico de doações
        var ctx = document.getElementById('doacoesChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
                datasets: [{
                    label: 'Doações de Sangue',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>
</html>



@endsection
